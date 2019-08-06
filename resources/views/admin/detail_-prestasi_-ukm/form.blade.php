<div class="form-group {{ $errors->has('id_restasi') ? 'has-error' : ''}}">
    <label for="id_restasi" class="control-label">{{ 'Id Restasi' }}</label>
    <input class="form-control" name="id_restasi" type="number" id="id_restasi" value="{{ isset($detail_prestasi_ukm->id_restasi) ? $detail_prestasi_ukm->id_restasi : ''}}" >
    {!! $errors->first('id_restasi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dpJuara') ? 'has-error' : ''}}">
    <label for="dpJuara" class="control-label">{{ 'Dpjuara' }}</label>
    <input class="form-control" name="dpJuara" type="text" id="dpJuara" value="{{ isset($detail_prestasi_ukm->dpJuara) ? $detail_prestasi_ukm->dpJuara : ''}}" >
    {!! $errors->first('dpJuara', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dpMedali') ? 'has-error' : ''}}">
    <label for="dpMedali" class="control-label">{{ 'Dpmedali' }}</label>
    <input class="form-control" name="dpMedali" type="text" id="dpMedali" value="{{ isset($detail_prestasi_ukm->dpMedali) ? $detail_prestasi_ukm->dpMedali : ''}}" >
    {!! $errors->first('dpMedali', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
