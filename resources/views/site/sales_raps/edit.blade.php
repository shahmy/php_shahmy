@extends('site.app')

@section('content')


    <form method="POST" action="{{ route('salesreps.update',[$salesRep->id]) }}">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ old('full_name',optional($salesRep)->full_name) }}" >
            {!! $errors->first('full_name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="mb-3">
            <label  class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email',optional($salesRep)->email) }}" >
            {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="mb-3">
            <label  class="form-label">Telephone No</label>
            <input type="text" name="tel" class="form-control" value="{{ old('tel',optional($salesRep)->tel)}}">
            {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="mb-3">
            <label  class="form-label">Joined Date</label>
            <input type="date" name="joined_date" class="form-control" value="{{ old('joined_date',optional($salesRep)->joined_date) }}">
            {!! $errors->first('joined_date', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="mb-3">
            <label  class="form-label">Current Route</label>
            <select class="form-select" name="current_route" aria-label="Default select example">
                <option value="Barnes Place" {{ ($salesRep->current_route == 'Barnes Place') ? 'selected' : '' }}>Barnes Place</option>
                <option value="Rosmid Place" {{ ($salesRep->current_route == 'Rosmid Place') ? 'selected' : '' }}>Rosmid Place</option>
                <option value="Cambridge Place" {{ ($salesRep->current_route == 'Cambridge Place') ? 'selected' : '' }}>Cambridge Place</option>
                <option value="Gregory Road" {{ ($salesRep->current_route == 'Gregory Road') ? 'selected' : '' }}>Gregory Road</option>
            </select>
              {!! $errors->first('current_route', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="mb-3">
            <label  class="form-label">Comments</label>
            <textarea class="form-control" name="comments" rows="3">{{ old('comments',optional($salesRep)->comments) }}</textarea>
            {!! $errors->first('comments', '<p class="help-block">:message</p>') !!}
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
