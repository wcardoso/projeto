
<div class="input-field">
	<input type="text" name="name" class="validate" value="<?php echo e(isset($usuario->name)? $usuario->name: ''); ?>">
	<label>Nome</label>
</div>

<div class="input-field">
	<input type="email" name="email" class="validate" value="<?php echo e(isset($usuario->email)? $usuario->email: ''); ?>">
	<label>E-mail</label>
</div>
<div class="input-field">
	<input type="password" name="password" class="validate">
	<label>Senha</label>
</div>
</div>

<div class="input-field">
        <input type="text" name="cidade" class="validate" value="<?php echo e(isset($usuario->cidade)? $usuario->cidade: ''); ?>">
        <label>Cidade</label>
</div>

<div class="input-field">
        <input type="text" name="telefone" class="validate" value="<?php echo e(isset($usuario->telefone)? $usuario->telefone: ''); ?>">
        <label>Telefone</label>
</div>

