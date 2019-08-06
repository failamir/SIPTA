<div class="form-group {{ $errors->has('cabangKode') ? 'has-error' : ''}}">
    <label for="cabangKode" class="control-label">{{ 'Cabangkode' }}</label>
    <input class="form-control" name="cabangKode" type="text" id="cabangKode" value="{{ isset($cabang->cabangKode) ? $cabang->cabangKode : ''}}" >
    {!! $errors->first('cabangKode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cabangNama') ? 'has-error' : ''}}">
    <label for="cabangNama" class="control-label">{{ 'Cabangnama' }}</label>
    <input class="form-control" name="cabangNama" type="text" id="cabangNama" value="{{ isset($cabang->cabangNama) ? $cabang->cabangNama : ''}}" >
    {!! $errors->first('cabangNama', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
