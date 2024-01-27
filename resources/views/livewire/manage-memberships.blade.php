<!-- resources/views/livewire/manage-memberships.blade.php -->

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Add Membership</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addMembership" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="spaceType" class="form-label">Space Type:</label>
                            <select name="spaceType" class="form-control @error('spaceType') is-invalid @enderror" id="spaceType" required>
                                <option value="">Select a Space Type</option>
                                @foreach($spaceTypes as $spaceType)
                                    <option value="{{ $spaceType->id }}">{{ $spaceType->type }}</option>
                                @endforeach
                            </select>
                            @error('spaceType') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="customerType" class="form-label">Customer Type:</label>
                            <select wire:model="customerType" class="form-select @error('customerType') is-invalid @enderror" id="customerType" required>
                                <option value="" disabled>Select Customer Type</option>
                                <option value="business">Business</option>
                                <option value="personal">Personal</option>
                            </select>
                            @error('customerType') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="timePeriod" class="form-label">Time Period:</label>
                            <input wire:model="timePeriod" type="text" class="form-control @error('timePeriod') is-invalid @enderror" id="timePeriod" required>
                            @error('timePeriod') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror" id="price" required>
                            @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add Membership</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




</div>


