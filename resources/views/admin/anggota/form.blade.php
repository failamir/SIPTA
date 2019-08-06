<div class="form-group {{ $errors->has('id_cabang') ? 'has-error' : ''}}">
    <label for="id_cabang" class="control-label">{{ 'Id Cabang' }}</label>
    <input class="form-control" name="id_cabang" type="number" id="id_cabang" value="{{ isset($anggotum->id_cabang) ? $anggotum->id_cabang : ''}}" >
    {!! $errors->first('id_cabang', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_sabuk') ? 'has-error' : ''}}">
    <label for="id_sabuk" class="control-label">{{ 'Id Sabuk' }}</label>
    <input class="form-control" name="id_sabuk" type="number" id="id_sabuk" value="{{ isset($anggotum->id_sabuk) ? $anggotum->id_sabuk : ''}}" >
    {!! $errors->first('id_sabuk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_dp') ? 'has-error' : ''}}">
    <label for="id_dp" class="control-label">{{ 'Id Dp' }}</label>
    <input class="form-control" name="id_dp" type="number" id="id_dp" value="{{ isset($anggotum->id_dp) ? $anggotum->id_dp : ''}}" >
    {!! $errors->first('id_dp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaNama') ? 'has-error' : ''}}">
    <label for="anggotaNama" class="control-label">{{ 'Anggotanama' }}</label>
    <input class="form-control" name="anggotaNama" type="text" id="anggotaNama" value="{{ isset($anggotum->anggotaNama) ? $anggotum->anggotaNama : ''}}" >
    {!! $errors->first('anggotaNama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaNim') ? 'has-error' : ''}}">
    <label for="anggotaNim" class="control-label">{{ 'Anggotanim' }}</label>
    <input class="form-control" name="anggotaNim" type="text" id="anggotaNim" value="{{ isset($anggotum->anggotaNim) ? $anggotum->anggotaNim : ''}}" >
    {!! $errors->first('anggotaNim', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaPassword') ? 'has-error' : ''}}">
    <label for="anggotaPassword" class="control-label">{{ 'Anggotapassword' }}</label>
    <input class="form-control" name="anggotaPassword" type="text" id="anggotaPassword" value="{{ isset($anggotum->anggotaPassword) ? $anggotum->anggotaPassword : ''}}" >
    {!! $errors->first('anggotaPassword', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaRiwayatPenyakit') ? 'has-error' : ''}}">
    <label for="anggotaRiwayatPenyakit" class="control-label">{{ 'Anggotariwayatpenyakit' }}</label>
    <input class="form-control" name="anggotaRiwayatPenyakit" type="text" id="anggotaRiwayatPenyakit" value="{{ isset($anggotum->anggotaRiwayatPenyakit) ? $anggotum->anggotaRiwayatPenyakit : ''}}" >
    {!! $errors->first('anggotaRiwayatPenyakit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaTglLahir') ? 'has-error' : ''}}">
    <label for="anggotaTglLahir" class="control-label">{{ 'Anggotatgllahir' }}</label>
    <input class="form-control" name="anggotaTglLahir" type="text" id="anggotaTglLahir" value="{{ isset($anggotum->anggotaTglLahir) ? $anggotum->anggotaTglLahir : ''}}" >
    {!! $errors->first('anggotaTglLahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaHp') ? 'has-error' : ''}}">
    <label for="anggotaHp" class="control-label">{{ 'Anggotahp' }}</label>
    <input class="form-control" name="anggotaHp" type="number" id="anggotaHp" value="{{ isset($anggotum->anggotaHp) ? $anggotum->anggotaHp : ''}}" >
    {!! $errors->first('anggotaHp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaAngkatan') ? 'has-error' : ''}}">
    <label for="anggotaAngkatan" class="control-label">{{ 'Anggotaangkatan' }}</label>
    <input class="form-control" name="anggotaAngkatan" type="number" id="anggotaAngkatan" value="{{ isset($anggotum->anggotaAngkatan) ? $anggotum->anggotaAngkatan : ''}}" >
    {!! $errors->first('anggotaAngkatan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaJK') ? 'has-error' : ''}}">
    <label for="anggotaJK" class="control-label">{{ 'Anggotajk' }}</label>
    <input class="form-control" name="anggotaJK" type="text" id="anggotaJK" value="{{ isset($anggotum->anggotaJK) ? $anggotum->anggotaJK : ''}}" >
    {!! $errors->first('anggotaJK', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('anggotaJur') ? 'has-error' : ''}}">
    <label for="anggotaJur" class="control-label">{{ 'Anggotajur' }}</label>
    <input class="form-control" name="anggotaJur" type="text" id="anggotaJur" value="{{ isset($anggotum->anggotaJur) ? $anggotum->anggotaJur : ''}}" >
    {!! $errors->first('anggotaJur', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duStatus') ? 'has-error' : ''}}">
    <label for="duStatus" class="control-label">{{ 'Dustatus' }}</label>
    <select name="duStatus" class="form-control" id="duStatus" >
    @foreach (json_decode('{"0":"Aktif","1":"Non Aktif","2":"Di Blok"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($anggotum->duStatus) && $anggotum->duStatus == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('duStatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
