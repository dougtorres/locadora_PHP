        <!-- conteúdo -->
        <div id="content" class="container">

            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="jumbotron">
                            <h2>O Melhor Custo Benefício da Região!</h2>
                            <p>Veículos em estado de novo, com seguro e revisados diáriamente. Tudo para garantir a sua segurança.</p>
                            <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba Mais</a></p>
                        </div>
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <p class="text-center">Já sou Cliente: </p>
                        <?php
                            echo form_open('login');
                            ?> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="<?php echo set_value('email') ?>" class="form-control" id="exampleInputEmail1" placeholder="Digite seu email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" name="senha" value="<?php echo set_value('senha') ?>" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Lembre-me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </form>
                        
                        <?php
                        echo form_close();
                        ?>
                        <p id="error_login" class="text-center">
                        <?php
                        echo validation_errors();
                        echo $error_login; 
                        ?></p>
                        <p class="text-center">Ainda não é cliente? Não perca tempo! </br>Cadastre-se <a href="<?php echo base_url('inicio/cadastro'); ?>">AQUI</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                </div>


            </div>
            <a href="<?php echo base_url('sisini'); ?>" class="btn btn-primary btn-mini">Ir para o sistema</a>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->

            </div>