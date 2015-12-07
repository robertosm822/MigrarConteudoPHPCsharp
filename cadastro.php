<?php require_once("header.php"); ?>

	<!-- Titulo da sessão -->
	<div class="container-fixed">
		<div class="pageName">
			<img src="images/cadastro.jpg" height="77" width="800" alt="">
		</div>
	</div><!-- Fim Titulo da sessão -->

	<!-- Box cadastro -->
	<div class="container-fixed">
		<div class="formularios">

			<h2>Cadastre-se para começar a indicar amigos e a ganhar descontos.</h2>

			<form action="" method="">

			<!-- Campo nome -->
			<div class="fullSize">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" value="">
				</div>
			</div>

			<!-- Campo email -->
			<div class="halfSize">
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="text" name="email" id="email" value="">
				</div>
			</div>

			<!-- Campo Confirma email -->
			<div class="halfSize">
				<div class="form-group erro">
					<label for="vemail">Confirma E-mail:</label>
					<input type="text" name="vemail" id="vemail" value="">
					<p class="msgErro">Exemplo mensagem de erro.</p>
				</div>
			</div>

			<!-- CPF -->
			<div class="oneThird">
				<div class="form-group">
					<label for="cpf">CPF:</label>
					<input type="text" name="cpf" id="cpf" value="">
					<p class="example">Exemplo: 111.222.333-44</p>
				</div>
			</div>

			<!-- Tipo -->
			<div class="oneThird">
				<div class="form-group">
					<label for="tipo">Tipo:</label>
					<select name="tipo" id="tipo">
						<option value="1">Aluno</option>
						<option value="1">Candidato</option>
					</select>
				</div>
			</div>

			<!-- Matrícula -->
			<div class="oneThird">
				<div class="form-group">
					<label for="matricula">Matrícula:</label>
					<input type="text" name="matricula" id="matricula" value="">
				</div>
			</div>

			<!-- Data de nascimento -->
			<div class="oneThird">
				<div class="form-group">
					<label for="dtnascimento">Data nascimento:</label>
					<input type="text" name="dtnascimento" id="dtnascimento" value="">
					<p class="example">Exemplo: dd/mm/aaaa</p>
				</div>
			</div>

			<!-- Senha -->
			<div class="oneThird">
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" value="">
					<p class="example">mínimo 4 dígitos e no máximo 8.</p>
				</div>
			</div>

			<!-- Senha -->
			<div class="oneThird">
				<div class="form-group">
					<label for="csenha">Confirma senha:</label>
					<input type="password" name="csenha" id="csenha" value="">
					<p class="example">mínimo 4 dígitos e no máximo 8.</p>
				</div>
			</div>

			<div class="halfSize">
				<div class="captchaImage">
					<img src="images/captcha-example.jpg" height="56" width="208" alt="" />
				</div>
				<div class="form-group">
					<label for="captcha">Digite o texto acima:</label>
					<input type="text" name="captcha" id="captcha" value="">
				</div>
			</div>

			<div class="halfSize">
				<div class="form-group button">
					<input type="submit" class="btnSubmit" value="Enviar">
				</div>
			</div>

			</form>
		</div>
	</div><!-- Fim Box cadastro -->

<?php require_once("footer.php"); ?>