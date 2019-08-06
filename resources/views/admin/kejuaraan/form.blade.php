<div class="form-group {{ $errors->has('kejNama') ? 'has-error' : ''}}">
    <label for="kejNama" class="control-label">{{ 'Kejnama' }}</label>
    <input class="form-control" name="kejNama" type="text" id="kejNama" value="{{ isset($kejuaraan->kejNama) ? $kejuaraan->kejNama : ''}}" >
    {!! $errors->first('kejNama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kejTglBatas') ? 'has-error' : ''}}">
    <label for="kejTglBatas" class="control-label">{{ 'Kejtglbatas' }}</label>
    <input class="form-control" name="kejTglBatas" type="text" id="kejTglBatas" value="{{ isset($kejuaraan->kejTglBatas) ? $kejuaraan->kejTglBatas : ''}}" >
    {!! $errors->first('kejTglBatas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kejDeskripsi') ? 'has-error' : ''}}">
    <label for="kejDeskripsi" class="control-label">{{ 'Kejdeskripsi' }}</label>
    <textarea class="form-control" rows="5" name="kejDeskripsi" type="textarea" id="kejDeskripsi" >{{ isset($kejuaraan->kejDeskripsi) ? $kejuaraan->kejDeskripsi : ''}}</textarea>
    {!! $errors->first('kejDeskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kejStatus') ? 'has-error' : ''}}">
    <label for="kejStatus" class="control-label">{{ 'Kejstatus' }}</label>
    <select name="kejStatus" class="form-control" id="kejStatus" >
    @foreach (json_decode('{"0":"Aktif","1":"Non Aktif","2":"Di Blok"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($kejuaraan->kejStatus) && $kejuaraan->kejStatus == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('kejStatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
