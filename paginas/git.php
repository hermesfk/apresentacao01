<div class="container">
    <div class="row">
        <div class="col">            

            <h1 class="text-center">O que é o Git? Entenda de uma vez!</h1>
            <div class="col-8 m-auto">
                <img class="img-fluid" src="https://dkrn4sk0rn31v.cloudfront.net/2019/02/07195131/capa-git-github.png" alt="" />                
            </div>
            <h3>O que é o Git?</h3>
            <p>
                Você conhece a ferramenta Git? Compreende como as ferramentas desse sistema irão te ajudar? Reconhece a importância dela para os programadores? Se sua resposta for não, em primeiro lugar, 
                fique tranquilo, pois esse artigo foi feito, especialmente e com muito atenção para você. Nele irei apresentar as simples, porém, 
                importantes funções e utilidades 
                que serão uma mão na roda em muitos momentos nessa jornada de programador.
            </p>

            <p>
                De início, precisamos saber o que é o Git, provavelmente em vários sites você já leu que se tratava de um sistema de versionamento, 
                e essa afirmação está completamente certa, já que pela própria plataforma pode-se criar novas versões ou “Forks” que possibilitam
                alterar códigos dos seus amigos ou qualquer tipo de pessoa que esteja conectada à plataforma, como também, podemos enviar códigos 
                de seu computador para serem alterados por outro alguém, criando novas versões de sua aplicação (ou versionamento dos seus 
                projetos). Entretanto, ainda não é possível realizar um commit inverso, ou seja, enviar automaticamente do site para abri-lo 
                na ide, restando apenas, baixar o projeto zipado, deszipar-lo no pc e após isso alterá-lo para ide. Para entender melhor essa 
                resumida explicação e compreender outras funcionalidades do git não há maneira melhor do que praticar, já que assim, tudo que 
                foi passado será melhor difundido em sua mente, dito isto, vamos pôr a mão na massa.          
            </p>           
            <h3>Na prática</h3>
            <p>A seguir, irei mostrar na prática e de maneira ilustrativa e dinâmica de como funciona o git nas seguintes IDEs, como instalar as ferramentas Git e como enviar seu projeto para o site github.</p>            
            <p>No primeiro caso, irei demonstrar na IDE do Netbeans R.C., junto com o emulador local Laragon, mas, antes de tudo, precisamos instalar os plugins na IDE para que assim as ferramentas Git sejam utilizadas: </p>          


            <h3>Passo-a-passo: </h3>



            <div class="col-9 m-auto">

                <!--                //slide-->
                <div class="bd-example">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#f5f5f5"/><text x="50%" y="50%" fill="#aaa" dy=".3em">First slide</text></svg>

                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#bbb" dy=".3em">Second slide</text></svg>

                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e5e5e5"/><text x="50%" y="50%" fill="#999" dy=".3em">Third slide</text></svg>

                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!--fim do slide-->

                    <p>Logo após abrir o Netbeans RC, clicando na opção ferramentas você precisará baixar alguns plugins e instalá-los para utilizar o git, pois, apenas assim poderá desfrutar das ferramentas. Veja os passos a seguir para instalar os plugins:</p>

                    <p>1- Abra o netbeans, vá em ferramenta:</p>
                    <img class="img-fluid" src="plugins/img/passo1.png" alt="" />
                    <p></p>
                    <img class="img-fluid" src="plugins/img/passo2.png" alt="" />          
                    <p>3- Plug-ins disponíveis:</p>
                    <img class="img-fluid" src="plugins/img/passo3.png" alt="" />
                    <p>4-Ir na barra de pesquisa, nela escrever git e marcar as 3 opções mostradas abaixo e instalar:                </p>
                    <img class="img-fluid" src="plugins/img/passo5.png" alt="" />          
                    <img class="img-fluid" src="plugins/img/passo6.png" alt="" />          
                    <img class="img-fluid" src="plugins/img/passo7.png" alt="" />            
                    <p>5-Próximo:</p>
                    <img class="img-fluid" src="plugins/img/passo8.png" alt="" />  
                    <p>6-instalar:</p>
                    <img class="img-fluid" src="plugins/img/passo11.png" alt="" />
                    <p>7-Continuar:</p>
                    <img class="img-fluid" src="plugins/img/passo12.png" alt="" />
                    <p>8-Finalizar e fechar a janela:</p>            
                    <img class="img-fluid" src="plugins/img/passo13.png" alt="" />                                    
                    <img class="img-fluid" src="plugins/img/passo14.png" alt="" />                
                </div>
                <p>Feito isso, </p>
            </div>
        </div>
    </div>
