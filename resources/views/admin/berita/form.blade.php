<div class="form-group {{ $errors->has('beritaJudul') ? 'has-error' : ''}}">
    <label for="beritaJudul" class="control-label">{{ 'Beritajudul' }}</label>
    <input class="form-control" name="beritaJudul" type="text" id="beritaJudul" value="{{ isset($beritum->beritaJudul) ? $beritum->beritaJudul : ''}}" >
    {!! $errors->first('beritaJudul', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('beritaTgl') ? 'has-error' : ''}}">
    <label for="beritaTgl" class="control-label">{{ 'Beritatgl' }}</label>
    <input class="form-control" name="beritaTgl" type="date" id="beritaTgl" value="{{ isset($beritum->beritaTgl) ? $beritum->beritaTgl : ''}}" >
    {!! $errors->first('beritaTgl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('beritaIsi') ? 'has-error' : ''}}">
    <label for="beritaIsi" class="control-label">{{ 'Beritaisi' }}</label>
    <textarea class="form-control" rows="5" name="beritaIsi" type="textarea" id="beritaIsi" >{{ isset($beritum->beritaIsi) ? $beritum->beritaIsi : ''}}</textarea>
    {!! $errors->first('beritaIsi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
