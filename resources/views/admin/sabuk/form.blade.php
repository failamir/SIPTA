<div class="form-group {{ $errors->has('SabukKode') ? 'has-error' : ''}}">
    <label for="SabukKode" class="control-label">{{ 'Sabukkode' }}</label>
    <input class="form-control" name="SabukKode" type="text" id="SabukKode" value="{{ isset($sabuk->SabukKode) ? $sabuk->SabukKode : ''}}" >
    {!! $errors->first('SabukKode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('SabukNama') ? 'has-error' : ''}}">
    <label for="SabukNama" class="control-label">{{ 'Sabuknama' }}</label>
    <input class="form-control" name="SabukNama" type="text" id="SabukNama" value="{{ isset($sabuk->SabukNama) ? $sabuk->SabukNama : ''}}" >
    {!! $errors->first('SabukNama', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
