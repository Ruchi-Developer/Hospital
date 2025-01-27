@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Loan Request') }}</div>
                <div class="card-body">
                    <form action="{{ route('loanRequests.update', $loanRequest->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $loanRequest->name }}">
                            @if($errors->has('name'))
                            <span class="text-danger" id="name_error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $loanRequest->email }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" value="{{ $loanRequest->amount }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <input type="text" name="reason" class="form-control" value="{{ $loanRequest->reason }}" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="pending" {{ $loanRequest->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="approved" {{ $loanRequest->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="rejected" {{ $loanRequest->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
