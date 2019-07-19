<div class="form-group">
    <label for="licitation_code">Código Licitação</label>
    <input name="licitation_code" type="text" class="form-control{{ $errors->has('licitation_code') ? ' is-invalid' : '' }}" id="licitation_code" placeholder="@lang('common.licitation_code')" value="{{ isset($licitation)?$licitation->licitation_code:old('licitation_code') }}">

    @if ($errors->has('licitation_code'))
        <span class="invalid-feedback" paper="alert">
            <strong>{{ $errors->first('licitation_code') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="scope">Scope</label>
    <input name="scope" type="text" class="form-control{{ $errors->has('scope') ? ' is-invalid' : '' }}" id="scope" placeholder="@lang('common.scope')" value="{{ isset($licitation)?$licitation->scope:old('scope') }}">

    @if ($errors->has('scope'))
        <span class="invalid-feedback" paper="alert">
            <strong>{{ $errors->first('scope') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="@lang('common.description')">{{ isset($licitation)?$licitation->description:old('description') }}</textarea>

    @if ($errors->has('description'))
        <span class="invalid-feedback" paper="alert">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>



<button type="submit" class="btn btn-primary">Enviar</button>
<a href="\licitations" class="btn btn-danger">Cancelar</a>
