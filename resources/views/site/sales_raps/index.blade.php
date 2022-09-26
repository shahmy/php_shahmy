@extends('site.app')

@section('content')

@if (count($salesRep) > 0)

<div class="table-responsive">
    <table class="table">
        <caption>List of users</caption>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Current Route</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($salesRep as $rep)
            <tr>
                <th>{{ $rep->full_name }}</th>
                <td>{{ $rep->email }}</td>
                <td>{{ $rep->tel }}</td>
                <td>{{ $rep->current_route }}</td>
                <td><a href="{{ route('salesreps.show', $rep->id) }}">View</a></td>
                <td><a href="{{ route('salesreps.edit', $rep->id) }}">Edit</a></td>
                <td><form
                    action="{{ route('salesreps.destroy', $rep->id) }}"
                    method="POST"
                    onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                >
                    @csrf @method('DELETE')
                    <button
                        type="submit"
                        class="btn btn-light text-danger"
                    >
                        Delete
                    </button>
                </form></td>
            </tr>
          @endforeach


        </tbody>
    </table>
  </div>

  @endif

@endsection
