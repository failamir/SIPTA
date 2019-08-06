<div class="form-group {{ $errors->has('id_kejuaraan') ? 'has-error' : ''}}">
    <label for="id_kejuaraan" class="control-label">{{ 'Id Kejuaraan' }}</label>
    <input class="form-control" name="id_kejuaraan" type="number" id="id_kejuaraan" value="{{ isset($daftar_kejuaraan->id_kejuaraan) ? $daftar_kejuaraan->id_kejuaraan : ''}}" >
    {!! $errors->first('id_kejuaraan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_anggota') ? 'has-error' : ''}}">
    <label for="id_anggota" class="control-label">{{ 'Id Anggota' }}</label>
    <input class="form-control" name="id_anggota" type="number" id="id_anggota" value="{{ isset($daftar_kejuaraan->id_anggota) ? $daftar_kejuaraan->id_anggota : ''}}" >
    {!! $errors->first('id_anggota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_cabang') ? 'has-error' : ''}}">
    <label for="id_cabang" class="control-label">{{ 'Id Cabang' }}</label>
    <input class="form-control" name="id_cabang" type="number" id="id_cabang" value="{{ isset($daftar_kejuaraan->id_cabang) ? $daftar_kejuaraan->id_cabang : ''}}" >
    {!! $errors->first('id_cabang', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dkTinggiBadan') ? 'has-error' : ''}}">
    <label for="dkTinggiBadan" class="control-label">{{ 'Dktinggibadan' }}</label>
    <input class="form-control" name="dkTinggiBadan" type="text" id="dkTinggiBadan" value="{{ isset($daftar_kejuaraan->dkTinggiBadan) ? $daftar_kejuaraan->dkTinggiBadan : ''}}" >
    {!! $errors->first('dkTinggiBadan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dkBeratBadan') ? 'has-error' : ''}}">
    <label for="dkBeratBadan" class="control-label">{{ 'Dkberatbadan' }}</label>
    <input class="form-control" name="dkBeratBadan" type="text" id="dkBeratBadan" value="{{ isset($daftar_kejuaraan->dkBeratBadan) ? $daftar_kejuaraan->dkBeratBadan : ''}}" >
    {!! $errors->first('dkBeratBadan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duStatus') ? 'has-error' : ''}}">
    <label for="duStatus" class="control-label">{{ 'Dustatus' }}</label>
    <select name="duStatus" class="form-control" id="duStatus" >
    @foreach (json_decode('{"0":"Aktif","1":"Non Aktif","2":"Di Blok"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($daftar_kejuaraan->duStatus) && $daftar_kejuaraan->duStatus == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('duStatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
