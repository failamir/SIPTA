<div class="form-group {{ $errors->has('id_ukt') ? 'has-error' : ''}}">
    <label for="id_ukt" class="control-label">{{ 'Id Ukt' }}</label>
    <input class="form-control" name="id_ukt" type="number" id="id_ukt" value="{{ isset($daftar_ukt->id_ukt) ? $daftar_ukt->id_ukt : ''}}" >
    {!! $errors->first('id_ukt', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_anggota') ? 'has-error' : ''}}">
    <label for="id_anggota" class="control-label">{{ 'Id Anggota' }}</label>
    <input class="form-control" name="id_anggota" type="number" id="id_anggota" value="{{ isset($daftar_ukt->id_anggota) ? $daftar_ukt->id_anggota : ''}}" >
    {!! $errors->first('id_anggota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duSabukUjian') ? 'has-error' : ''}}">
    <label for="duSabukUjian" class="control-label">{{ 'Dusabukujian' }}</label>
    <input class="form-control" name="duSabukUjian" type="text" id="duSabukUjian" value="{{ isset($daftar_ukt->duSabukUjian) ? $daftar_ukt->duSabukUjian : ''}}" >
    {!! $errors->first('duSabukUjian', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duStatus') ? 'has-error' : ''}}">
    <label for="duStatus" class="control-label">{{ 'Dustatus' }}</label>
    <select name="duStatus" class="form-control" id="duStatus" >
    @foreach (json_decode('{"0":"Aktif","1":"Non Aktif","2":"Di Blok"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($daftar_ukt->duStatus) && $daftar_ukt->duStatus == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('duStatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
