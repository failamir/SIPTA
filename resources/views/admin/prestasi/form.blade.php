<div class="form-group {{ $errors->has('id_kejuaraan') ? 'has-error' : ''}}">
    <label for="id_kejuaraan" class="control-label">{{ 'Id Kejuaraan' }}</label>
    <input class="form-control" name="id_kejuaraan" type="number" id="id_kejuaraan" value="{{ isset($prestasi->id_kejuaraan) ? $prestasi->id_kejuaraan : ''}}" >
    {!! $errors->first('id_kejuaraan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prestasiTgl') ? 'has-error' : ''}}">
    <label for="prestasiTgl" class="control-label">{{ 'Prestasitgl' }}</label>
    <input class="form-control" name="prestasiTgl" type="date" id="prestasiTgl" value="{{ isset($prestasi->prestasiTgl) ? $prestasi->prestasiTgl : ''}}" >
    {!! $errors->first('prestasiTgl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prestasiTingkat') ? 'has-error' : ''}}">
    <label for="prestasiTingkat" class="control-label">{{ 'Prestasitingkat' }}</label>
    <input class="form-control" name="prestasiTingkat" type="text" id="prestasiTingkat" value="{{ isset($prestasi->prestasiTingkat) ? $prestasi->prestasiTingkat : ''}}" >
    {!! $errors->first('prestasiTingkat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prestasiJmlMedali') ? 'has-error' : ''}}">
    <label for="prestasiJmlMedali" class="control-label">{{ 'Prestasijmlmedali' }}</label>
    <input class="form-control" name="prestasiJmlMedali" type="number" id="prestasiJmlMedali" value="{{ isset($prestasi->prestasiJmlMedali) ? $prestasi->prestasiJmlMedali : ''}}" >
    {!! $errors->first('prestasiJmlMedali', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
