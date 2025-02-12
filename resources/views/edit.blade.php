<x-app :title="isset($task) ?'Edit task':'Add task'">
    <x-taskform :task="$task"/>
</x-app>
