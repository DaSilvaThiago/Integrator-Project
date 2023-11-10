<
<div class="modal fade" id="quick-look">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal--shadow">

            <button class="btn dismiss-button fas" type="button" data-dismiss="modal"><span class="material-icons">
                close
                </span></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Breadcrumb ======-->
                        <div class="pd-breadcrumb u-s-m-b-30">
                            <ul class="pd-breadcrumb__list">
                                <li class="has-separator">

                                    <a href="index.hml">Home</a>
                                </li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">Roupas</a>
                                </li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html" class="categoria_produto"></a>
                                </li>
                                <li class="is-marked">

                                    <a href="shop-side-version-2.html" class="nome_produto"></a>
                                </li>
                            </ul>
                        </div>
                        <!--====== End - Product Breadcrumb ======-->


                        <!--====== Product Detail ======-->
                        <div class="pd u-s-m-b-30">
                            <div class="pd-wrap">
                                <div id="js-product-detail-modal">

                                    <div>
                                        <img class="u-img-fluid" src="" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="u-s-m-t-15">
                                <div id="js-product-detail-modal-thumbnail">
                                    <div>

                                        <img class="u-img-fluid" src="" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            <div>

                                <span class="pd-detail__name nome_produto"></span>
                            </div>
                            <div>
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__price preco_produto">R$</span>

                                    <span class="pd-detail__discount desconto_produto"></span><del
                                        class="pd-detail__del valor_desconto" ></del>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="5">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="4">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="3">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="2">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="1">1 star</label>
                                    </div>
                                    <span class="pd-detail__review u-s-m-l-4">

                                        <a href="product-detail.html" class="reviews"></a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__stock estoque_produto"></span>
                                    <span class="pd-detail__left estoque_fim"></span>

                                </div>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__preview-desc descricao_produto"></span>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><span class="material-icons">
                                        favorite
                                        </span>

                                        <a href="signin.html">Adicionar à lista de desejos</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><span class="material-icons">
                                        mail
                                        </span>

                                        <a href="signin.html">Me avise quando chegar</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <form class="pd-detail__form">
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">

                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus material-icons">
                                                    remove
                                                    </span>

                                                <input class="input-counter__text input-counter--text-primary-style"
                                                    type="text" value="1" data-min="1" data-max="1000">

                                                <span class="input-counter__plus material-icons">
                                                    add
                                                    </span>
                                            </div>
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Por no Carrinho</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>