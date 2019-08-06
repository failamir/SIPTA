<div class="form-group {{ $errors->has('uktKode') ? 'has-error' : ''}}">
    <label for="uktKode" class="control-label">{{ 'Uktkode' }}</label>
    <input class="form-control" name="uktKode" type="text" id="uktKode" value="{{ isset($ukt->uktKode) ? $ukt->uktKode : ''}}" >
    {!! $errors->first('uktKode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('uktPeriode') ? 'has-error' : ''}}">
    <label for="uktPeriode" class="control-label">{{ 'Uktperiode' }}</label>
    <input class="form-control" name="uktPeriode" type="text" id="uktPeriode" value="{{ isset($ukt->uktPeriode) ? $ukt->uktPeriode : ''}}" >
    {!! $errors->first('uktPeriode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('uktDeskripsi') ? 'has-error' : ''}}">
    <label for="uktDeskripsi" class="control-label">{{ 'Uktdeskripsi' }}</label>
    <textarea class="form-control" rows="5" name="uktDeskripsi" type="textarea" id="uktDeskripsi" >{{ isset($ukt->uktDeskripsi) ? $ukt->uktDeskripsi : ''}}</textarea>
    {!! $errors->first('uktDeskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('uktTglDeskripsi') ? 'has-error' : ''}}">
    <label for="uktTglDeskripsi" class="control-label">{{ 'Ukttgldeskripsi' }}</label>
    <input class="form-control" name="uktTglDeskripsi" type="date" id="uktTglDeskripsi" value="{{ isset($ukt->uktTglDeskripsi) ? $ukt->uktTglDeskripsi : ''}}" >
    {!! $errors->first('uktTglDeskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('uktStatus') ? 'has-error' : ''}}">
    <label for="uktStatus" class="control-label">{{ 'Uktstatus' }}</label>
    <select name="uktStatus" class="form-control" id="uktStatus" >
    @foreach (json_decode('{"0":"Aktif","1":"Non Aktif","2":"Di Blok"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ukt->uktStatus) && $ukt->uktStatus == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('uktStatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
