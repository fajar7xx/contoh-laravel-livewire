<div>
    {{-- The best athlete wants his opponent at his best. --}}
{{--    kirimkan data ke contact create--}}
{{--    <livewire:contact-create :contacts="$contacts"/>--}}
    @if($statusUpdate)
        <livewire:contact-update/>
    @else
        <livewire:contact-create/>
    @endif

    <hr>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <th>{{$contact->name}}</th>
                        <th>{{$contact->phone}}</th>
                        <th>
                            <a href="#" wire:click="getContact({{$contact->id}})" class="btn btn-sm btn-info text-white">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger text-white">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
