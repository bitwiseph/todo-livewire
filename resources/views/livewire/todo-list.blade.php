<div class="card">
   <table class="table">
       <thead>
           <tr>
               <th>Title</th>
               <th>Description</th>
               <th></th>
           </tr>
       </thead>
       <tbody>
           @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->title }}</td>
                <td>{{  $todo->description }}</td>
                <td>
                    <div class="btn-group">
                        <a href="#" wire:click="edit({{ $todo->id }})" class="btn btn-sm btn-success">Edit</a>
                        <a href="#" wire:click="delete({{ $todo->id  }})" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
           @endforeach
       </tbody>
   </table>
</div>
