<!--begin: Datatable-->
<table class="table table-separate table-head-custom taskTable" id="kt_datatable">
    <thead>
    <tr>
        <th>Name</th>
        <th>State</th>
        <th>Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td id="task_{{$task->id}}_id">{{ $states[$task->status] }}</td>

            <td>
                    <div class='btn-group'>
                            <a href="{{ route('tasks.edit', [$task->id]) }}"
                               class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    </div>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
<!--end: Datatable-->
<!--end::Card-->
