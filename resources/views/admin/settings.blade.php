@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Settings</h1>
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="site_name">Site Name</label>
            <input type="text" class="form-control" id="site_name" name="site_name" value="{{ old('site_name', $settings->site_name) }}">
        </div>

        <div class="form-group">
            <label for="site_email">Site Email</label>
            <input type="email" class="form-control" id="site_email" name="site_email" value="{{ old('site_email', $settings->site_email) }}">
        </div>

        <div class="form-group">
            <label for="maintenance_mode">Maintenance Mode</label>
            <select class="form-control" id="maintenance_mode" name="maintenance_mode">
                <option value="0" {{ old('maintenance_mode', $settings->maintenance_mode) == 0 ? 'selected' : '' }}>Off</option>
                <option value="1" {{ old('maintenance_mode', $settings->maintenance_mode) == 1 ? 'selected' : '' }}>On</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>

    <hr>

    <h2>Actions</h2>
    <form action="{{ route('admin.settings.clear_cache') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-warning">Clear Cache</button>
    </form>
</div>
@endsection