public function members($id)
    {
        $options = '';
        $userData = [];

        $project = Project::select('id', 'public')->find($id);
        $checkPublic = ($project) ? $project->public : 0;

        if ($id == 0 || $checkPublic == 1) {
            $members = User::allEmployees(null, true);

            foreach ($members as $item) {
                $self_select = (user() && user()->id == $item->id) ? '<span class=\'ml-2 badge badge-secondary\'>' . __('app.itsYou') . '</span>' : '';

                $options .= '<option  data-content="<span class=\'badge badge-pill badge-light border\'><div class=\'d-inline-block mr-1\'><img class=\'taskEmployeeImg rounded-circle\' src=' . $item->image_url . ' ></div> ' . $item->name . '' . $self_select . '</span>" value="' . $item->id . '"> ' . $item->name . '</option>';
            }

            $projectShortCode = '--';
        }
        else {

            $members = ProjectMember::with('user')->where('project_id', $id)->whereHas('user', function ($q) {
                $q->where('status', 'active');
            })->get();


            foreach ($members as $item) {
                $self_select = (user() && user()->id == $item->user->id) ? '<span class=\'ml-2 badge badge-secondary\'>' . __('app.itsYou') . '</span>' : '';

                $options .= '<option
                data-content="<span class=\'badge badge-pill badge-light border\'><div class=\'d-inline-block mr-1\'><img class=\'taskEmployeeImg rounded-circle\' src=' . $item->user->image_url . ' ></div> ' . $item->user->name . '' . $self_select . '</span>"
                value="' . $item->user->id . '"> ' . $item->user->name . ' </option>';

                $url = route('employees.show', [$item->user->id]);

                $userData[] = ['id' => $item->user->id, 'value' => $item->user->name, 'image' => $item->user->image_url, 'link' => $url];
            }


            $project = Project::findOrFail($id);
            $projectShortCode = $project->project_short_code;

        }

        return Reply::dataOnly(['status' => 'success', 'unique_id' => $projectShortCode, 'data' => $options, 'userData' => $userData]);

    }