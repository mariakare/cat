
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login | Águas Petrópolis Paulista</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="..//assets/img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="..//assets/img/favicon.ico" type="image/x-icon" />


<style>
@charset "UTF-8";
body.debug:after {
  content: "data:15:26"; }

/** Outros arquivos de apoio
  * Carrossel, Grid
*/
/**
  * SaMUS: MDM
  * Grid System
  * Versão: 1.0.1
  * Criado em: 01-2018 - V0.0.1
  * Última modificação em: 06-2018 - V1.0.1
  	* Modificações Backlog:
		* Criação
		* Inserção dos módulos de formulários (30-03-2018)
		* Diversos elementos de layout, radius, font-size, grid de produtos e blur (11-06-2018) V1.0.1
*/
.gs-linha,
.gs-coluna {
  box-sizing: border-box; }

.gs-linha:before,
.gs-linha:after {
  content: " ";
  display: table; }

.gs-linha:after {
  clear: both; }

.gs-coluna {
  position: relative;
  float: left; }

.gs-coluna-1 {
  width: 8.33333333333333%; }

.gs-coluna-2 {
  width: 16.66666666666666%; }

.gs-coluna-3 {
  width: 24.99999999999999%; }

.gs-coluna-4 {
  width: 33.33333333333332%; }

.gs-coluna-5 {
  width: 41.66666666666665%; }

.gs-coluna-6 {
  width: 49.99999999999998%; }

.gs-coluna-7 {
  width: 58.33333333333331%; }

.gs-coluna-8 {
  width: 66.66666666666664%; }

.gs-coluna-9 {
  width: 74.99999999999997%; }

.gs-coluna-10 {
  width: 83.3333333333333%; }

.gs-coluna-11 {
  width: 91.66666666666663%; }

.gs-coluna-12 {
  width: 100%; }

/* Offsets (margens) */
/* AJUSTAR ESSES OFFSETS QUE ESTAO ERRADOS */
.gs-coluna-1.gs-coluna-offset-1 {
  width: 8.33333333333333%;
  margin-right: 8.3333333333%; }

.gs-coluna-2.gs-coluna-offset-1 {
  width: 16.66666666666666%;
  margin-right: 8.3333333333%; }

.gs-coluna-3.gs-coluna-offset-1 {
  width: 16.66666666666666%;
  margin-right: 8.3333333333%; }

.gs-coluna-4.gs-coluna-offset-1 {
  width: 24.99999999999999%;
  margin-right: 8.3333333333%; }

.gs-coluna-5.gs-coluna-offset-1 {
  width: 33.33333333333332%;
  margin-right: 8.3333333333%; }

.gs-coluna-6.gs-coluna-offset-1 {
  width: 41.66666666666665%;
  margin-right: 8.3333333333%; }

.gs-coluna-7.gs-coluna-offset-1 {
  width: calc( 58.33333333333331% - $margem_padrao);
  margin-right: 8.3333333333%; }

.gs-coluna-8.gs-coluna-offset-1 {
  width: calc( 66.66666666666664% - $margem_padrao);
  margin-right: 8.3333333333%; }

.gs-coluna-9.gs-coluna-offset-1 {
  width: 66.66666666666664%;
  margin-right: 8.3333333333%; }

.gs-coluna-12.gs-coluna-offset-1 {
  width: 91.66666666666663%;
  margin-right: 8.3333333333%; }

.gs-coluna-2.gs-coluna-offset-10 {
  width: 16.66666666666666%;
  margin-right: 83.3333333333333%; }

/* Offsets (margens menores) */
.gs-coluna-1.gs-coluna-offset-05 {
  width: calc( 8.3333333333% - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-2.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 2 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-3.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 3 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-4.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 4 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-5.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 5 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-6.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 6 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-7.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 7 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-8.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 8 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-9.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 9 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-10.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 10 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-11.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 11 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-coluna-12.gs-coluna-offset-05 {
  width: calc( ( 8.3333333333% * 12 ) - 4.1666666667% );
  margin-right: 4.1666666667%; }

.gs-linha.debug .gs-coluna-1 {
  background-color: #84ceb9; }
.gs-linha.debug .gs-coluna-2 {
  background-color: rgba(132, 206, 185, 0.9); }
.gs-linha.debug .gs-coluna-3 {
  background-color: rgba(132, 206, 185, 0.8); }
.gs-linha.debug .gs-coluna-4 {
  background-color: rgba(132, 206, 185, 0.7); }
.gs-linha.debug .gs-coluna-5 {
  background-color: rgba(132, 206, 185, 0.6); }
.gs-linha.debug .gs-coluna-6 {
  background-color: rgba(132, 206, 185, 0.5); }
.gs-linha.debug .gs-coluna-7 {
  background-color: rgba(132, 206, 185, 0.4); }
.gs-linha.debug .gs-coluna-8 {
  background-color: rgba(132, 206, 185, 0.3); }
.gs-linha.debug .gs-coluna-9 {
  background-color: rgba(132, 206, 185, 0.2); }
.gs-linha.debug .gs-coluna-10 {
  background-color: rgba(132, 206, 185, 0.1); }
.gs-linha.debug .gs-coluna-11 {
  background-color: rgba(132, 199, 206, 0.6); }
.gs-linha.debug .gs-coluna-12 {
  background-color: rgba(132, 199, 206, 0.4); }

/* Controlers */
[data-gs-display='desktop'] {
  display: block; }

[data-gs-display='mobile'] {
  display: none; }

[data-gs-display='tablet'] {
  display: none; }

/* Formulários */
.gs-form .gs-linha .gs-coluna:hover small.gs-form-helper {
  visibility: visible; }
.gs-form .gs-form-linha {
  padding: 5px;
  border-bottom: 2px solid rgba(0, 0, 0, 0.24); }
  .gs-form .gs-form-linha label {
    display: block;
    padding: 5px 0;
    color: rgba(0, 0, 0, 0.54);
    font-size: 13px; }
  .gs-form .gs-form-linha input,
  .gs-form .gs-form-linha textarea,
  .gs-form .gs-form-linha select,
  .gs-form .gs-form-linha option,
  .gs-form .gs-form-linha file {
    padding: 3px 0;
    font-size: 16px;
    width: 100%;
    border: none;
    background: transparent;
    outline: none; }
  .gs-form .gs-form-linha input[type="date"] {
    padding: 0; }
  .gs-form .gs-form-linha select {
    height: 24px; }
  .gs-form .gs-form-linha:hover {
    border-color: #039be5; }
    .gs-form .gs-form-linha:hover label {
      color: #039be5; }
.gs-form .gs-form-helper {
  visibility: hidden;
  display: block;
  color: rgba(0, 0, 0, 0.54);
  font-size: 13px;
  padding: 5px;
  margin: 5px 0; }

/**
  * Interface / UX
*/
.gs-success,
.gs-warning,
.gs-error {
  display: block;
  padding: 8px 15px;
  text-align: center;
  border: 1px solid #000;
  border-radius: 4px;
  margin: 15px 0; }

.gs-success {
  color: #5A8367;
  border-color: #B9D6C2;
  background-color: #DFFFDF; }

.gs-warning {
  color: #83765A;
  border-color: #d6cdb9b8;
  background-color: #fff5df; }

.gs-error {
  color: #835A5A;
  border-color: #D6B9B9;
  background-color: #FFDFDF; }

.gs-spacer {
  height: 51px; }
  .gs-spacer span {
    height: 1px;
    display: block;
    margin: 0 auto;
    border-bottom: 1px solid #cecece;
    padding-top: 25px; }

.gs-blur {
  filter: blur(1px);
  filter: url("blur.svg#gaussian_blur");
  -webkit-filter: blur(1px); }

.gs-remove-blur {
  -webkit-filter: blur(0);
  -moz-filter: blur(0);
  -o-filter: blur(0);
  -ms-filter: blur(0);
  filter: blur(0);
  -webkit-backface-visibility: hidden; }

/**
  * Novos UX Petropolis
*/
/**
  * Grids para produtos / E-commerce based
*/
.gs-product-grid .gs-pg-container {
  margin: 8px;
  padding: 8px;
  overflow: hidden;
  position: relative; }
  .gs-product-grid .gs-pg-container.gs-pg-no-margin {
    margin-left: 0;
    margin-right: 0; }
  .gs-product-grid .gs-pg-container figure {
    margin: 0; }
    .gs-product-grid .gs-pg-container figure img {
      max-width: 100%;
      height: auto; }
    .gs-product-grid .gs-pg-container figure figcaption {
      display: none; }
  .gs-product-grid .gs-pg-container .gs-pg-summary {
    position: absolute;
    bottom: 8px;
    width: calc( 100% - 16px ); }
    .gs-product-grid .gs-pg-container .gs-pg-summary li {
      padding: 5px 0; }
    .gs-product-grid .gs-pg-container .gs-pg-summary .gs-pg-category {
      font-size: 0.9em; }
    .gs-product-grid .gs-pg-container .gs-pg-summary .gs-pg-name {
      font-size: 1.1em;
      font-weight: bold; }
    .gs-product-grid .gs-pg-container .gs-pg-summary .gs-pg-price {
      padding: 8px 0;
      font-size: 1.3em; }
.gs-product-grid .gs-coluna-12 .gs-pg-container {
  height: 350px; }
.gs-product-grid .gs-coluna-6 .gs-pg-container {
  height: 300px; }
.gs-product-grid .gs-coluna-4 .gs-pg-container {
  height: 250px; }

/**
  * Fonts
*/
.gs-toupper, .project-footer .project-btn-news-footer, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .project-headers.project-basket h2, .project-data-list article th, .project-cupom-block .project-btn-cupom, .project-categories, .project-related h3, .project-header-user .project-btn-filters, .project-institucional .project-content .project-ins-nav li, .project-loading .messages a, .btn-model-5, .btn-model-9, .btn-model-10 {
  text-transform: uppercase; }

.gs-tolower {
  text-transform: lowercase; }

.gs-ucwords {
  text-transform: capitalize; }

.gs-fminimal, .gs-product-grid .gs-coluna-4 .gs-pg-container, .project-total-products, .project-forms .project-label-back, .project-cupom-block .project-btn-cupom {
  font-size: 0.6em; }

.gs-fsmall, .gs-product-grid .gs-coluna-6 .gs-pg-container, .project-forms label, .project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
.options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
.options-container .double-btn .btn-dia-semana,
.options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10, .project-related h3, .project-summary, .project-institucional .project-content, .project-loading .messages {
  font-size: 0.8em; }

.gs-fregular, .gs-product-grid .gs-coluna-12 .gs-pg-container, .project-forms input,
.project-forms select,
.project-forms option, .project-add-item-block .project-btn-add, .project-add-item-block .project-adicionar-cesta, .project-search-box input, .project-loading, .options-container .header .title-complement p, .checkout-topics {
  font-size: 1em; }

.gs-fmedium, .project-data-list article li input, .project-data-list article td input, .project-cupom-block .project-cbspacing input, .project-institucional .project-content .project-visao-itens, .options-container .header .title h1 {
  font-size: 1.2em; }

.gs-fbig, .project-summary .project-sum-price {
  font-size: 1.4em; }

.gs-fmaximum, .project-add-item-block .project-cbspacing input {
  font-size: 1.6em; }

/**
  * Border radius
*/
.gs-bradius, .project-footer .project-overlayer, .project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
.options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
.options-container .double-btn .btn-dia-semana,
.options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10, .project-floating-bubble, .project-total-products, .project-tabs .project-tabs-results, .project-tabs .project-tabs-results .project-btn-dark, .project-tabs .project-tabs-results .project-footer .project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .project-btn-news-footer, .project-search-box, .project-header-user .project-perfil, .project-header-user .project-overlayer, .project-loading .messages a {
  border-radius: 100%; }
  .gs-bradius.gs-r1, .project-footer .gs-r1.project-overlayer, .gs-r1.project-btn, .project-footer .gs-r1.project-btn-news-footer, .gs-r1.project-btn-big, .gs-r1.project-adicionar-cesta, .gs-r1.project-btn-shaddow, .gs-r1.btn-model-5, .gs-r1.project-btn-tabs, .gs-r1.btn-model-6, .gs-r1.btn-model-7, .gs-r1.project-btn-filters, .gs-r1.project-btn-highlight, .project-loading .gs-r1.status, .gs-r1.project-alerts, .gs-r1.project-btn-translucid, .options-container .double-btn .gs-r1.btn-left,
  .options-container .double-btn .gs-r1.btn-right, .options-container .double-btn .gs-r1.btn-periodos,
  .options-container .double-btn .gs-r1.btn-dia-semana,
  .options-container .double-btn .gs-r1.btn-recorrencia-assinatura, .gs-r1.btn-model-8, .gs-r1.btn-model-9, .gs-r1.btn-model-10, .gs-r1.project-floating-bubble, .gs-r1.project-total-products, .project-tabs .gs-r1.project-tabs-results, .project-tabs .project-tabs-results .gs-r1.project-btn-dark, .gs-r1.project-search-box, .project-header-user .gs-r1.project-perfil, .project-header-user .gs-r1.project-overlayer, .project-loading .messages a.gs-r1 {
    border-radius: 1px; }
  .gs-bradius.gs-r2, .project-footer .gs-r2.project-overlayer, .gs-r2.project-btn, .project-footer .gs-r2.project-btn-news-footer, .gs-r2.project-btn-big, .gs-r2.project-adicionar-cesta, .gs-r2.project-btn-shaddow, .gs-r2.btn-model-5, .gs-r2.project-btn-tabs, .gs-r2.btn-model-6, .gs-r2.btn-model-7, .gs-r2.project-btn-filters, .gs-r2.project-btn-highlight, .project-loading .gs-r2.status, .gs-r2.project-alerts, .gs-r2.project-btn-translucid, .options-container .double-btn .gs-r2.btn-left,
  .options-container .double-btn .gs-r2.btn-right, .options-container .double-btn .gs-r2.btn-periodos,
  .options-container .double-btn .gs-r2.btn-dia-semana,
  .options-container .double-btn .gs-r2.btn-recorrencia-assinatura, .gs-r2.btn-model-8, .gs-r2.btn-model-9, .gs-r2.btn-model-10, .gs-r2.project-floating-bubble, .gs-r2.project-total-products, .project-tabs .gs-r2.project-tabs-results, .project-tabs .project-tabs-results .gs-r2.project-btn-dark, .gs-r2.project-search-box, .project-header-user .gs-r2.project-perfil, .project-header-user .gs-r2.project-overlayer, .project-loading .messages a.gs-r2 {
    border-radius: 2px; }
  .gs-bradius.gs-r3, .project-footer .gs-r3.project-overlayer, .gs-r3.project-btn, .project-footer .gs-r3.project-btn-news-footer, .gs-r3.project-btn-big, .gs-r3.project-adicionar-cesta, .gs-r3.project-btn-shaddow, .gs-r3.btn-model-5, .gs-r3.project-btn-tabs, .gs-r3.btn-model-6, .gs-r3.btn-model-7, .gs-r3.project-btn-filters, .gs-r3.project-btn-highlight, .project-loading .gs-r3.status, .gs-r3.project-alerts, .gs-r3.project-btn-translucid, .options-container .double-btn .gs-r3.btn-left,
  .options-container .double-btn .gs-r3.btn-right, .options-container .double-btn .gs-r3.btn-periodos,
  .options-container .double-btn .gs-r3.btn-dia-semana,
  .options-container .double-btn .gs-r3.btn-recorrencia-assinatura, .gs-r3.btn-model-8, .gs-r3.btn-model-9, .gs-r3.btn-model-10, .gs-r3.project-floating-bubble, .gs-r3.project-total-products, .project-tabs .gs-r3.project-tabs-results, .project-tabs .project-tabs-results .gs-r3.project-btn-dark, .gs-r3.project-search-box, .project-header-user .gs-r3.project-perfil, .project-header-user .gs-r3.project-overlayer, .project-loading .messages a.gs-r3 {
    border-radius: 3px; }
  .gs-bradius.gs-r4, .project-footer .project-overlayer, .project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
  .options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
  .options-container .double-btn .btn-dia-semana,
  .options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10, .gs-r4.project-floating-bubble, .project-footer .project-floating-bubble.project-overlayer, .project-floating-bubble.project-btn, .project-footer .project-floating-bubble.project-btn-news-footer, .project-floating-bubble.project-btn-big, .project-floating-bubble.project-adicionar-cesta, .project-floating-bubble.project-btn-shaddow, .project-floating-bubble.btn-model-5, .project-floating-bubble.project-btn-tabs, .project-floating-bubble.btn-model-6, .project-floating-bubble.btn-model-7, .project-floating-bubble.project-btn-filters, .project-floating-bubble.project-btn-highlight, .project-loading .project-floating-bubble.status, .project-floating-bubble.project-alerts, .project-floating-bubble.project-btn-translucid, .options-container .double-btn .project-floating-bubble.btn-left,
  .options-container .double-btn .project-floating-bubble.btn-right, .options-container .double-btn .project-floating-bubble.btn-periodos,
  .options-container .double-btn .project-floating-bubble.btn-dia-semana,
  .options-container .double-btn .project-floating-bubble.btn-recorrencia-assinatura, .project-floating-bubble.btn-model-8, .project-floating-bubble.btn-model-9, .project-floating-bubble.btn-model-10, .project-tabs .project-floating-bubble.project-tabs-results, .project-tabs .project-tabs-results .project-floating-bubble.project-btn-dark, .project-floating-bubble.project-search-box, .project-header-user .project-floating-bubble.project-overlayer, .project-loading .messages a.project-floating-bubble, .gs-r4.project-total-products, .project-footer .project-total-products.project-overlayer, .project-total-products.project-btn, .project-footer .project-total-products.project-btn-news-footer, .project-total-products.project-btn-big, .project-total-products.project-adicionar-cesta, .project-total-products.project-btn-shaddow, .project-total-products.btn-model-5, .project-total-products.project-btn-tabs, .project-total-products.btn-model-6, .project-total-products.btn-model-7, .project-total-products.project-btn-filters, .project-total-products.project-btn-highlight, .project-loading .project-total-products.status, .project-total-products.project-alerts, .project-total-products.project-btn-translucid, .options-container .double-btn .project-total-products.btn-left,
  .options-container .double-btn .project-total-products.btn-right, .options-container .double-btn .project-total-products.btn-periodos,
  .options-container .double-btn .project-total-products.btn-dia-semana,
  .options-container .double-btn .project-total-products.btn-recorrencia-assinatura, .project-total-products.btn-model-8, .project-total-products.btn-model-9, .project-total-products.btn-model-10, .project-tabs .project-total-products.project-tabs-results, .project-tabs .project-tabs-results .project-total-products.project-btn-dark, .project-total-products.project-search-box, .project-header-user .project-total-products.project-overlayer, .project-loading .messages a.project-total-products, .project-tabs .project-tabs-results, .project-tabs .project-tabs-results .project-btn-dark, .project-tabs .project-tabs-results .project-footer .project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .project-btn-news-footer, .project-search-box, .project-header-user .gs-r4.project-perfil, .project-header-user .project-perfil.project-btn, .project-header-user .project-footer .project-perfil.project-btn-news-footer, .project-footer .project-header-user .project-perfil.project-btn-news-footer, .project-header-user .project-perfil.project-btn-big, .project-header-user .project-perfil.project-adicionar-cesta, .project-header-user .project-perfil.project-btn-shaddow, .project-header-user .project-perfil.btn-model-5, .project-header-user .project-perfil.project-btn-tabs, .project-header-user .project-perfil.btn-model-6, .project-header-user .project-perfil.btn-model-7, .project-header-user .project-perfil.project-btn-filters, .project-header-user .project-perfil.project-btn-highlight, .project-header-user .project-loading .project-perfil.status, .project-loading .project-header-user .project-perfil.status, .project-header-user .project-perfil.project-alerts, .project-header-user .project-perfil.project-btn-translucid, .project-header-user .options-container .double-btn .project-perfil.btn-left, .options-container .double-btn .project-header-user .project-perfil.btn-left,
  .project-header-user .options-container .double-btn .project-perfil.btn-right,
  .options-container .double-btn .project-header-user .project-perfil.btn-right, .project-header-user .options-container .double-btn .project-perfil.btn-periodos, .options-container .double-btn .project-header-user .project-perfil.btn-periodos,
  .project-header-user .options-container .double-btn .project-perfil.btn-dia-semana,
  .options-container .double-btn .project-header-user .project-perfil.btn-dia-semana,
  .project-header-user .options-container .double-btn .project-perfil.btn-recorrencia-assinatura,
  .options-container .double-btn .project-header-user .project-perfil.btn-recorrencia-assinatura, .project-header-user .project-perfil.btn-model-8, .project-header-user .project-perfil.btn-model-9, .project-header-user .project-perfil.btn-model-10, .project-header-user .project-tabs .project-perfil.project-tabs-results, .project-tabs .project-header-user .project-perfil.project-tabs-results, .project-header-user .project-tabs .project-tabs-results .project-perfil.project-btn-dark, .project-tabs .project-tabs-results .project-header-user .project-perfil.project-btn-dark, .project-header-user .project-perfil.project-search-box, .project-header-user .project-perfil.project-overlayer, .project-header-user .project-loading .messages a.project-perfil, .project-loading .messages .project-header-user a.project-perfil, .project-header-user .project-overlayer, .project-loading .messages a {
    border-radius: 4px; }
  .gs-bradius.gs-r5, .project-footer .gs-r5.project-overlayer, .gs-r5.project-btn, .project-footer .gs-r5.project-btn-news-footer, .gs-r5.project-btn-big, .gs-r5.project-adicionar-cesta, .gs-r5.project-btn-shaddow, .gs-r5.btn-model-5, .gs-r5.project-btn-tabs, .gs-r5.btn-model-6, .gs-r5.btn-model-7, .gs-r5.project-btn-filters, .gs-r5.project-btn-highlight, .project-loading .gs-r5.status, .gs-r5.project-alerts, .gs-r5.project-btn-translucid, .options-container .double-btn .gs-r5.btn-left,
  .options-container .double-btn .gs-r5.btn-right, .options-container .double-btn .gs-r5.btn-periodos,
  .options-container .double-btn .gs-r5.btn-dia-semana,
  .options-container .double-btn .gs-r5.btn-recorrencia-assinatura, .gs-r5.btn-model-8, .gs-r5.btn-model-9, .gs-r5.btn-model-10, .gs-r5.project-floating-bubble, .gs-r5.project-total-products, .project-tabs .gs-r5.project-tabs-results, .project-tabs .project-tabs-results .gs-r5.project-btn-dark, .gs-r5.project-search-box, .project-header-user .gs-r5.project-perfil, .project-header-user .gs-r5.project-overlayer, .project-loading .messages a.gs-r5 {
    border-radius: 5px; }
  .gs-bradius.gs-r6, .project-footer .gs-r6.project-overlayer, .gs-r6.project-btn, .project-footer .gs-r6.project-btn-news-footer, .gs-r6.project-btn-big, .gs-r6.project-adicionar-cesta, .gs-r6.project-btn-shaddow, .gs-r6.btn-model-5, .gs-r6.project-btn-tabs, .gs-r6.btn-model-6, .gs-r6.btn-model-7, .gs-r6.project-btn-filters, .gs-r6.project-btn-highlight, .project-loading .gs-r6.status, .gs-r6.project-alerts, .gs-r6.project-btn-translucid, .options-container .double-btn .gs-r6.btn-left,
  .options-container .double-btn .gs-r6.btn-right, .options-container .double-btn .gs-r6.btn-periodos,
  .options-container .double-btn .gs-r6.btn-dia-semana,
  .options-container .double-btn .gs-r6.btn-recorrencia-assinatura, .gs-r6.btn-model-8, .gs-r6.btn-model-9, .gs-r6.btn-model-10, .gs-r6.project-floating-bubble, .gs-r6.project-total-products, .project-tabs .gs-r6.project-tabs-results, .project-tabs .project-tabs-results .gs-r6.project-btn-dark, .gs-r6.project-search-box, .project-header-user .gs-r6.project-perfil, .project-header-user .gs-r6.project-overlayer, .project-loading .messages a.gs-r6 {
    border-radius: 6px; }
  .gs-bradius.gs-r7, .project-footer .gs-r7.project-overlayer, .gs-r7.project-btn, .project-footer .gs-r7.project-btn-news-footer, .gs-r7.project-btn-big, .gs-r7.project-adicionar-cesta, .gs-r7.project-btn-shaddow, .gs-r7.btn-model-5, .gs-r7.project-btn-tabs, .gs-r7.btn-model-6, .gs-r7.btn-model-7, .gs-r7.project-btn-filters, .gs-r7.project-btn-highlight, .project-loading .gs-r7.status, .gs-r7.project-alerts, .gs-r7.project-btn-translucid, .options-container .double-btn .gs-r7.btn-left,
  .options-container .double-btn .gs-r7.btn-right, .options-container .double-btn .gs-r7.btn-periodos,
  .options-container .double-btn .gs-r7.btn-dia-semana,
  .options-container .double-btn .gs-r7.btn-recorrencia-assinatura, .gs-r7.btn-model-8, .gs-r7.btn-model-9, .gs-r7.btn-model-10, .gs-r7.project-floating-bubble, .gs-r7.project-total-products, .project-tabs .gs-r7.project-tabs-results, .project-tabs .project-tabs-results .gs-r7.project-btn-dark, .gs-r7.project-search-box, .project-header-user .gs-r7.project-perfil, .project-header-user .gs-r7.project-overlayer, .project-loading .messages a.gs-r7 {
    border-radius: 7px; }
  .gs-bradius.gs-r8, .project-footer .gs-r8.project-overlayer, .gs-r8.project-btn, .project-footer .gs-r8.project-btn-news-footer, .gs-r8.project-btn-big, .gs-r8.project-adicionar-cesta, .gs-r8.project-btn-shaddow, .gs-r8.btn-model-5, .gs-r8.project-btn-tabs, .gs-r8.btn-model-6, .gs-r8.btn-model-7, .gs-r8.project-btn-filters, .gs-r8.project-btn-highlight, .project-loading .gs-r8.status, .gs-r8.project-alerts, .gs-r8.project-btn-translucid, .options-container .double-btn .gs-r8.btn-left,
  .options-container .double-btn .gs-r8.btn-right, .options-container .double-btn .gs-r8.btn-periodos,
  .options-container .double-btn .gs-r8.btn-dia-semana,
  .options-container .double-btn .gs-r8.btn-recorrencia-assinatura, .gs-r8.btn-model-8, .gs-r8.btn-model-9, .gs-r8.btn-model-10, .gs-r8.project-floating-bubble, .gs-r8.project-total-products, .project-tabs .gs-r8.project-tabs-results, .project-tabs .project-tabs-results .gs-r8.project-btn-dark, .gs-r8.project-search-box, .project-header-user .gs-r8.project-perfil, .project-header-user .gs-r8.project-overlayer, .project-loading .messages a.gs-r8 {
    border-radius: 8px; }
  .gs-bradius.gs-r9, .project-footer .gs-r9.project-overlayer, .gs-r9.project-btn, .project-footer .gs-r9.project-btn-news-footer, .gs-r9.project-btn-big, .gs-r9.project-adicionar-cesta, .gs-r9.project-btn-shaddow, .gs-r9.btn-model-5, .gs-r9.project-btn-tabs, .gs-r9.btn-model-6, .gs-r9.btn-model-7, .gs-r9.project-btn-filters, .gs-r9.project-btn-highlight, .project-loading .gs-r9.status, .gs-r9.project-alerts, .gs-r9.project-btn-translucid, .options-container .double-btn .gs-r9.btn-left,
  .options-container .double-btn .gs-r9.btn-right, .options-container .double-btn .gs-r9.btn-periodos,
  .options-container .double-btn .gs-r9.btn-dia-semana,
  .options-container .double-btn .gs-r9.btn-recorrencia-assinatura, .gs-r9.btn-model-8, .gs-r9.btn-model-9, .gs-r9.btn-model-10, .gs-r9.project-floating-bubble, .gs-r9.project-total-products, .project-tabs .gs-r9.project-tabs-results, .project-tabs .project-tabs-results .gs-r9.project-btn-dark, .gs-r9.project-search-box, .project-header-user .gs-r9.project-perfil, .project-header-user .gs-r9.project-overlayer, .project-loading .messages a.gs-r9 {
    border-radius: 9px; }
  .gs-bradius.gs-r10, .project-footer .gs-r10.project-overlayer, .gs-r10.project-btn, .project-footer .gs-r10.project-btn-news-footer, .gs-r10.project-btn-big, .gs-r10.project-adicionar-cesta, .gs-r10.project-btn-shaddow, .gs-r10.btn-model-5, .gs-r10.project-btn-tabs, .gs-r10.btn-model-6, .gs-r10.btn-model-7, .gs-r10.project-btn-filters, .gs-r10.project-btn-highlight, .project-loading .gs-r10.status, .gs-r10.project-alerts, .gs-r10.project-btn-translucid, .options-container .double-btn .gs-r10.btn-left,
  .options-container .double-btn .gs-r10.btn-right, .options-container .double-btn .gs-r10.btn-periodos,
  .options-container .double-btn .gs-r10.btn-dia-semana,
  .options-container .double-btn .gs-r10.btn-recorrencia-assinatura, .gs-r10.btn-model-8, .gs-r10.btn-model-9, .gs-r10.btn-model-10, .gs-r10.project-floating-bubble, .gs-r10.project-total-products, .project-tabs .gs-r10.project-tabs-results, .project-tabs .project-tabs-results .gs-r10.project-btn-dark, .gs-r10.project-search-box, .project-header-user .gs-r10.project-perfil, .project-header-user .gs-r10.project-overlayer, .project-loading .messages a.gs-r10 {
    border-radius: 10px; }
  .gs-bradius.gs-r15, .project-footer .gs-r15.project-overlayer, .gs-r15.project-btn, .project-footer .gs-r15.project-btn-news-footer, .gs-r15.project-btn-big, .gs-r15.project-adicionar-cesta, .gs-r15.project-btn-shaddow, .gs-r15.btn-model-5, .gs-r15.project-btn-tabs, .gs-r15.btn-model-6, .gs-r15.btn-model-7, .gs-r15.project-btn-filters, .gs-r15.project-btn-highlight, .project-loading .gs-r15.status, .gs-r15.project-alerts, .gs-r15.project-btn-translucid, .options-container .double-btn .gs-r15.btn-left,
  .options-container .double-btn .gs-r15.btn-right, .options-container .double-btn .gs-r15.btn-periodos,
  .options-container .double-btn .gs-r15.btn-dia-semana,
  .options-container .double-btn .gs-r15.btn-recorrencia-assinatura, .gs-r15.btn-model-8, .gs-r15.btn-model-9, .gs-r15.btn-model-10, .gs-r15.project-floating-bubble, .gs-r15.project-total-products, .project-tabs .gs-r15.project-tabs-results, .project-tabs .project-tabs-results .gs-r15.project-btn-dark, .gs-r15.project-search-box, .project-header-user .gs-r15.project-perfil, .project-header-user .gs-r15.project-overlayer, .project-loading .messages a.gs-r15 {
    border-radius: 15px; }
  .gs-bradius.gs-r20, .project-footer .gs-r20.project-overlayer, .gs-r20.project-btn, .project-footer .gs-r20.project-btn-news-footer, .gs-r20.project-btn-big, .gs-r20.project-adicionar-cesta, .gs-r20.project-btn-shaddow, .gs-r20.btn-model-5, .gs-r20.project-btn-tabs, .gs-r20.btn-model-6, .gs-r20.btn-model-7, .gs-r20.project-btn-filters, .gs-r20.project-btn-highlight, .project-loading .gs-r20.status, .gs-r20.project-alerts, .gs-r20.project-btn-translucid, .options-container .double-btn .gs-r20.btn-left,
  .options-container .double-btn .gs-r20.btn-right, .options-container .double-btn .gs-r20.btn-periodos,
  .options-container .double-btn .gs-r20.btn-dia-semana,
  .options-container .double-btn .gs-r20.btn-recorrencia-assinatura, .gs-r20.btn-model-8, .gs-r20.btn-model-9, .gs-r20.btn-model-10, .gs-r20.project-floating-bubble, .gs-r20.project-total-products, .project-tabs .gs-r20.project-tabs-results, .project-tabs .project-tabs-results .gs-r20.project-btn-dark, .gs-r20.project-search-box, .project-header-user .gs-r20.project-perfil, .project-header-user .gs-r20.project-overlayer, .project-loading .messages a.gs-r20 {
    border-radius: 20px; }
  .gs-bradius.gs-rleft, .project-footer .gs-rleft.project-overlayer, .project-footer .project-cupom-block .project-overlayer.project-cbspacing, .project-cupom-block .project-footer .project-overlayer.project-cbspacing, .project-footer .project-add-item-block .project-overlayer.project-cbspacing, .project-add-item-block .project-footer .project-overlayer.project-cbspacing, .gs-rleft.project-btn, .project-footer .gs-rleft.project-btn-news-footer, .project-footer .project-cupom-block .project-btn-news-footer.project-cbspacing, .project-cupom-block .project-footer .project-btn-news-footer.project-cbspacing, .project-footer .project-add-item-block .project-btn-news-footer.project-cbspacing, .project-add-item-block .project-footer .project-btn-news-footer.project-cbspacing, .gs-rleft.project-btn-big, .project-cupom-block .project-btn-big.project-cbspacing, .project-cupom-block .project-cbspacing.project-adicionar-cesta, .project-add-item-block .project-btn-big.project-cbspacing, .project-add-item-block .project-cbspacing.project-adicionar-cesta, .gs-rleft.project-adicionar-cesta, .gs-rleft.project-btn-shaddow, .project-cupom-block .project-btn-shaddow.project-cbspacing, .project-cupom-block .project-cbspacing.btn-model-5, .project-add-item-block .project-btn-shaddow.project-cbspacing, .project-add-item-block .project-cbspacing.btn-model-5, .gs-rleft.btn-model-5, .gs-rleft.project-btn-tabs, .project-cupom-block .project-btn-tabs.project-cbspacing, .project-cupom-block .project-cbspacing.btn-model-6, .project-cupom-block .project-cbspacing.btn-model-7, .project-add-item-block .project-btn-tabs.project-cbspacing, .project-add-item-block .project-cbspacing.btn-model-6, .project-add-item-block .project-cbspacing.btn-model-7, .gs-rleft.btn-model-6, .gs-rleft.btn-model-7, .gs-rleft.project-btn-filters, .project-cupom-block .project-btn-filters.project-cbspacing, .project-add-item-block .project-btn-filters.project-cbspacing, .gs-rleft.project-btn-highlight, .project-cupom-block .project-btn-highlight.project-cbspacing, .project-cupom-block .project-loading .project-cbspacing.status, .project-loading .project-cupom-block .project-cbspacing.status, .project-cupom-block .project-cbspacing.project-alerts, .project-add-item-block .project-btn-highlight.project-cbspacing, .project-add-item-block .project-loading .project-cbspacing.status, .project-loading .project-add-item-block .project-cbspacing.status, .project-add-item-block .project-cbspacing.project-alerts, .project-loading .gs-rleft.status, .gs-rleft.project-alerts, .gs-rleft.project-btn-translucid, .project-cupom-block .project-btn-translucid.project-cbspacing, .project-add-item-block .project-btn-translucid.project-cbspacing, .project-cupom-block .project-btn.project-cbspacing, .project-cupom-block .options-container .double-btn .project-cbspacing.btn-left, .options-container .double-btn .project-cupom-block .project-cbspacing.btn-left,
  .project-cupom-block .options-container .double-btn .project-cbspacing.btn-right,
  .options-container .double-btn .project-cupom-block .project-cbspacing.btn-right, .project-cupom-block .options-container .double-btn .project-cbspacing.btn-periodos, .options-container .double-btn .project-cupom-block .project-cbspacing.btn-periodos,
  .project-cupom-block .options-container .double-btn .project-cbspacing.btn-dia-semana,
  .options-container .double-btn .project-cupom-block .project-cbspacing.btn-dia-semana,
  .project-cupom-block .options-container .double-btn .project-cbspacing.btn-recorrencia-assinatura,
  .options-container .double-btn .project-cupom-block .project-cbspacing.btn-recorrencia-assinatura, .project-cupom-block .project-cbspacing.btn-model-8, .project-cupom-block .project-cbspacing.btn-model-9, .project-cupom-block .project-cbspacing.btn-model-10, .project-add-item-block .project-btn.project-cbspacing, .project-add-item-block .options-container .double-btn .project-cbspacing.btn-left, .options-container .double-btn .project-add-item-block .project-cbspacing.btn-left,
  .project-add-item-block .options-container .double-btn .project-cbspacing.btn-right,
  .options-container .double-btn .project-add-item-block .project-cbspacing.btn-right, .project-add-item-block .options-container .double-btn .project-cbspacing.btn-periodos, .options-container .double-btn .project-add-item-block .project-cbspacing.btn-periodos,
  .project-add-item-block .options-container .double-btn .project-cbspacing.btn-dia-semana,
  .options-container .double-btn .project-add-item-block .project-cbspacing.btn-dia-semana,
  .project-add-item-block .options-container .double-btn .project-cbspacing.btn-recorrencia-assinatura,
  .options-container .double-btn .project-add-item-block .project-cbspacing.btn-recorrencia-assinatura, .project-add-item-block .project-cbspacing.btn-model-8, .project-add-item-block .project-cbspacing.btn-model-9, .project-add-item-block .project-cbspacing.btn-model-10, .options-container .double-btn .gs-rleft.btn-left,
  .options-container .double-btn .gs-rleft.btn-right, .options-container .double-btn .gs-rleft.btn-periodos,
  .options-container .double-btn .gs-rleft.btn-dia-semana,
  .options-container .double-btn .gs-rleft.btn-recorrencia-assinatura, .gs-rleft.btn-model-8, .gs-rleft.btn-model-9, .gs-rleft.btn-model-10, .gs-rleft.project-floating-bubble, .project-cupom-block .project-floating-bubble.project-cbspacing, .project-add-item-block .project-floating-bubble.project-cbspacing, .gs-rleft.project-total-products, .project-cupom-block .project-total-products.project-cbspacing, .project-add-item-block .project-total-products.project-cbspacing, .project-cupom-block .gs-bradius.project-cbspacing, .project-cupom-block .project-tabs .project-cbspacing.project-tabs-results, .project-tabs .project-cupom-block .project-cbspacing.project-tabs-results, .project-cupom-block .project-tabs .project-tabs-results .project-cbspacing.project-btn-dark, .project-tabs .project-tabs-results .project-cupom-block .project-cbspacing.project-btn-dark, .project-cupom-block .project-cbspacing.project-search-box, .project-cupom-block .project-header-user .project-cbspacing.project-perfil, .project-header-user .project-cupom-block .project-cbspacing.project-perfil, .project-cupom-block .project-header-user .project-cbspacing.project-overlayer, .project-header-user .project-cupom-block .project-cbspacing.project-overlayer, .project-cupom-block .project-loading .messages a.project-cbspacing, .project-loading .messages .project-cupom-block a.project-cbspacing, .project-tabs .gs-rleft.project-tabs-results, .project-tabs .project-add-item-block .project-tabs-results.project-cbspacing, .project-add-item-block .project-tabs .project-tabs-results.project-cbspacing, .project-tabs .project-tabs-results .gs-rleft.project-btn-dark, .project-tabs .project-tabs-results .project-footer .gs-rleft.project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .gs-rleft.project-btn-news-footer, .project-tabs .project-tabs-results .project-footer .project-cupom-block .project-btn-news-footer.project-cbspacing, .project-footer .project-cupom-block .project-tabs .project-tabs-results .project-btn-news-footer.project-cbspacing, .project-tabs .project-tabs-results .project-cupom-block .project-footer .project-btn-news-footer.project-cbspacing, .project-cupom-block .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.project-cbspacing, .project-tabs .project-tabs-results .project-footer .project-add-item-block .project-btn-news-footer.project-cbspacing, .project-footer .project-add-item-block .project-tabs .project-tabs-results .project-btn-news-footer.project-cbspacing, .project-tabs .project-tabs-results .project-add-item-block .project-footer .project-btn-news-footer.project-cbspacing, .project-add-item-block .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.project-cbspacing, .project-tabs .project-tabs-results .project-add-item-block .project-btn-dark.project-cbspacing, .project-add-item-block .project-tabs .project-tabs-results .project-btn-dark.project-cbspacing, .project-add-item-block .gs-bradius.project-cbspacing, .project-add-item-block .project-cbspacing.project-search-box, .project-add-item-block .project-header-user .project-cbspacing.project-perfil, .project-header-user .project-add-item-block .project-cbspacing.project-perfil, .project-add-item-block .project-header-user .project-cbspacing.project-overlayer, .project-header-user .project-add-item-block .project-cbspacing.project-overlayer, .project-add-item-block .project-loading .messages a.project-cbspacing, .project-loading .messages .project-add-item-block a.project-cbspacing, .gs-rleft.project-search-box, .project-header-user .gs-rleft.project-perfil, .project-header-user .gs-rleft.project-overlayer, .project-loading .messages a.gs-rleft {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .gs-bradius.gs-rright, .project-footer .gs-rright.project-overlayer, .project-footer .project-cupom-block .project-overlayer.project-btn-cupom, .project-cupom-block .project-footer .project-overlayer.project-btn-cupom, .project-footer .project-add-item-block .project-overlayer.project-btn-add, .project-add-item-block .project-footer .project-overlayer.project-btn-add, .project-footer .project-add-item-block .project-overlayer.project-adicionar-cesta, .project-add-item-block .project-footer .project-overlayer.project-adicionar-cesta, .gs-rright.project-btn, .project-footer .gs-rright.project-btn-news-footer, .project-footer .project-cupom-block .project-btn-news-footer.project-btn-cupom, .project-cupom-block .project-footer .project-btn-news-footer.project-btn-cupom, .project-footer .project-add-item-block .project-btn-news-footer.project-btn-add, .project-add-item-block .project-footer .project-btn-news-footer.project-btn-add, .project-footer .project-add-item-block .project-btn-news-footer.project-adicionar-cesta, .project-add-item-block .project-footer .project-btn-news-footer.project-adicionar-cesta, .gs-rright.project-btn-big, .project-cupom-block .project-btn-big.project-btn-cupom, .project-cupom-block .project-btn-cupom.project-adicionar-cesta, .project-add-item-block .project-btn-big.project-btn-add, .project-add-item-block .project-adicionar-cesta, .gs-rright.project-adicionar-cesta, .gs-rright.project-btn-shaddow, .project-cupom-block .project-btn-shaddow.project-btn-cupom, .project-cupom-block .project-btn-cupom.btn-model-5, .project-add-item-block .project-btn-shaddow.project-btn-add, .project-add-item-block .project-btn-add.btn-model-5, .project-add-item-block .btn-model-5.project-adicionar-cesta, .project-add-item-block .project-btn-shaddow.project-adicionar-cesta, .gs-rright.btn-model-5, .gs-rright.project-btn-tabs, .project-cupom-block .project-btn-tabs.project-btn-cupom, .project-cupom-block .project-btn-cupom.btn-model-6, .project-cupom-block .project-btn-cupom.btn-model-7, .project-add-item-block .project-btn-tabs.project-btn-add, .project-add-item-block .project-btn-add.btn-model-6, .project-add-item-block .btn-model-6.project-adicionar-cesta, .project-add-item-block .project-btn-add.btn-model-7, .project-add-item-block .btn-model-7.project-adicionar-cesta, .project-add-item-block .project-btn-tabs.project-adicionar-cesta, .gs-rright.btn-model-6, .gs-rright.btn-model-7, .gs-rright.project-btn-filters, .project-cupom-block .project-btn-filters.project-btn-cupom, .project-add-item-block .project-btn-filters.project-btn-add, .project-add-item-block .project-btn-filters.project-adicionar-cesta, .gs-rright.project-btn-highlight, .project-cupom-block .project-btn-highlight.project-btn-cupom, .project-cupom-block .project-loading .project-btn-cupom.status, .project-loading .project-cupom-block .project-btn-cupom.status, .project-cupom-block .project-btn-cupom.project-alerts, .project-add-item-block .project-btn-highlight.project-btn-add, .project-add-item-block .project-loading .project-btn-add.status, .project-loading .project-add-item-block .project-btn-add.status, .project-add-item-block .project-loading .status.project-adicionar-cesta, .project-loading .project-add-item-block .status.project-adicionar-cesta, .project-add-item-block .project-btn-add.project-alerts, .project-add-item-block .project-alerts.project-adicionar-cesta, .project-add-item-block .project-btn-highlight.project-adicionar-cesta, .project-loading .gs-rright.status, .gs-rright.project-alerts, .gs-rright.project-btn-translucid, .project-cupom-block .project-btn-translucid.project-btn-cupom, .project-add-item-block .project-btn-translucid.project-btn-add, .project-add-item-block .project-btn-translucid.project-adicionar-cesta, .project-cupom-block .project-btn.project-btn-cupom, .project-cupom-block .options-container .double-btn .project-btn-cupom.btn-left, .options-container .double-btn .project-cupom-block .project-btn-cupom.btn-left,
  .project-cupom-block .options-container .double-btn .project-btn-cupom.btn-right,
  .options-container .double-btn .project-cupom-block .project-btn-cupom.btn-right, .project-cupom-block .options-container .double-btn .project-btn-cupom.btn-periodos, .options-container .double-btn .project-cupom-block .project-btn-cupom.btn-periodos,
  .project-cupom-block .options-container .double-btn .project-btn-cupom.btn-dia-semana,
  .options-container .double-btn .project-cupom-block .project-btn-cupom.btn-dia-semana,
  .project-cupom-block .options-container .double-btn .project-btn-cupom.btn-recorrencia-assinatura,
  .options-container .double-btn .project-cupom-block .project-btn-cupom.btn-recorrencia-assinatura, .project-cupom-block .project-btn-cupom.btn-model-8, .project-cupom-block .project-btn-cupom.btn-model-9, .project-cupom-block .project-btn-cupom.btn-model-10, .project-add-item-block .project-btn.project-btn-add, .project-add-item-block .options-container .double-btn .project-btn-add.btn-left, .options-container .double-btn .project-add-item-block .project-btn-add.btn-left, .project-add-item-block .options-container .double-btn .btn-left.project-adicionar-cesta, .options-container .double-btn .project-add-item-block .btn-left.project-adicionar-cesta,
  .project-add-item-block .options-container .double-btn .project-btn-add.btn-right,
  .options-container .double-btn .project-add-item-block .project-btn-add.btn-right,
  .project-add-item-block .options-container .double-btn .btn-right.project-adicionar-cesta,
  .options-container .double-btn .project-add-item-block .btn-right.project-adicionar-cesta, .project-add-item-block .options-container .double-btn .project-btn-add.btn-periodos, .options-container .double-btn .project-add-item-block .project-btn-add.btn-periodos, .project-add-item-block .options-container .double-btn .btn-periodos.project-adicionar-cesta, .options-container .double-btn .project-add-item-block .btn-periodos.project-adicionar-cesta,
  .project-add-item-block .options-container .double-btn .project-btn-add.btn-dia-semana,
  .options-container .double-btn .project-add-item-block .project-btn-add.btn-dia-semana,
  .project-add-item-block .options-container .double-btn .btn-dia-semana.project-adicionar-cesta,
  .options-container .double-btn .project-add-item-block .btn-dia-semana.project-adicionar-cesta,
  .project-add-item-block .options-container .double-btn .project-btn-add.btn-recorrencia-assinatura,
  .options-container .double-btn .project-add-item-block .project-btn-add.btn-recorrencia-assinatura,
  .project-add-item-block .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta,
  .options-container .double-btn .project-add-item-block .btn-recorrencia-assinatura.project-adicionar-cesta, .project-add-item-block .project-btn-add.btn-model-8, .project-add-item-block .project-btn-add.btn-model-9, .project-add-item-block .project-btn-add.btn-model-10, .options-container .double-btn .gs-rright.btn-left,
  .options-container .double-btn .gs-rright.btn-right, .options-container .double-btn .gs-rright.btn-periodos,
  .options-container .double-btn .gs-rright.btn-dia-semana,
  .options-container .double-btn .gs-rright.btn-recorrencia-assinatura, .gs-rright.btn-model-8, .project-add-item-block .btn-model-8.project-adicionar-cesta, .gs-rright.btn-model-9, .project-add-item-block .btn-model-9.project-adicionar-cesta, .gs-rright.btn-model-10, .project-add-item-block .btn-model-10.project-adicionar-cesta, .gs-rright.project-floating-bubble, .project-cupom-block .project-floating-bubble.project-btn-cupom, .project-add-item-block .project-floating-bubble.project-btn-add, .project-add-item-block .project-floating-bubble.project-adicionar-cesta, .gs-rright.project-total-products, .project-cupom-block .project-total-products.project-btn-cupom, .project-add-item-block .project-total-products.project-btn-add, .project-add-item-block .project-total-products.project-adicionar-cesta, .project-cupom-block .gs-bradius.project-btn-cupom, .project-cupom-block .project-tabs .project-btn-cupom.project-tabs-results, .project-tabs .project-cupom-block .project-btn-cupom.project-tabs-results, .project-cupom-block .project-tabs .project-tabs-results .project-btn-cupom.project-btn-dark, .project-tabs .project-tabs-results .project-cupom-block .project-btn-cupom.project-btn-dark, .project-cupom-block .project-btn-cupom.project-search-box, .project-cupom-block .project-header-user .project-btn-cupom.project-perfil, .project-header-user .project-cupom-block .project-btn-cupom.project-perfil, .project-cupom-block .project-header-user .project-btn-cupom.project-overlayer, .project-header-user .project-cupom-block .project-btn-cupom.project-overlayer, .project-cupom-block .project-loading .messages a.project-btn-cupom, .project-loading .messages .project-cupom-block a.project-btn-cupom, .project-tabs .gs-rright.project-tabs-results, .project-tabs .project-add-item-block .project-tabs-results.project-btn-add, .project-add-item-block .project-tabs .project-tabs-results.project-btn-add, .project-tabs .project-add-item-block .project-tabs-results.project-adicionar-cesta, .project-add-item-block .project-tabs .project-tabs-results.project-adicionar-cesta, .project-tabs .project-tabs-results .gs-rright.project-btn-dark, .project-tabs .project-tabs-results .project-footer .gs-rright.project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .gs-rright.project-btn-news-footer, .project-tabs .project-tabs-results .project-footer .project-cupom-block .project-btn-news-footer.project-btn-cupom, .project-footer .project-cupom-block .project-tabs .project-tabs-results .project-btn-news-footer.project-btn-cupom, .project-tabs .project-tabs-results .project-cupom-block .project-footer .project-btn-news-footer.project-btn-cupom, .project-cupom-block .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.project-btn-cupom, .project-tabs .project-tabs-results .project-footer .project-add-item-block .project-btn-news-footer.project-btn-add, .project-footer .project-add-item-block .project-tabs .project-tabs-results .project-btn-news-footer.project-btn-add, .project-tabs .project-tabs-results .project-add-item-block .project-footer .project-btn-news-footer.project-btn-add, .project-add-item-block .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.project-btn-add, .project-tabs .project-tabs-results .project-footer .project-add-item-block .project-btn-news-footer.project-adicionar-cesta, .project-footer .project-add-item-block .project-tabs .project-tabs-results .project-btn-news-footer.project-adicionar-cesta, .project-tabs .project-tabs-results .project-add-item-block .project-footer .project-btn-news-footer.project-adicionar-cesta, .project-add-item-block .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.project-adicionar-cesta, .project-tabs .project-tabs-results .project-add-item-block .project-btn-dark.project-btn-add, .project-add-item-block .project-tabs .project-tabs-results .project-btn-dark.project-btn-add, .project-tabs .project-tabs-results .project-add-item-block .project-btn-dark.project-adicionar-cesta, .project-add-item-block .project-tabs .project-tabs-results .project-btn-dark.project-adicionar-cesta, .project-add-item-block .gs-bradius.project-btn-add, .project-add-item-block .project-tabs .project-tabs-results .project-footer .project-btn-news-footer.project-adicionar-cesta, .project-footer .project-tabs .project-tabs-results .project-add-item-block .project-btn-news-footer.project-adicionar-cesta, .project-add-item-block .project-btn-add.project-search-box, .project-add-item-block .project-header-user .project-btn-add.project-perfil, .project-header-user .project-add-item-block .project-btn-add.project-perfil, .project-add-item-block .project-header-user .project-btn-add.project-overlayer, .project-header-user .project-add-item-block .project-btn-add.project-overlayer, .project-add-item-block .project-loading .messages a.project-btn-add, .project-loading .messages .project-add-item-block a.project-btn-add, .project-add-item-block .project-loading .messages a.project-adicionar-cesta, .project-loading .messages .project-add-item-block a.project-adicionar-cesta, .gs-rright.project-search-box, .project-add-item-block .project-search-box.project-adicionar-cesta, .project-header-user .gs-rright.project-perfil, .project-header-user .project-add-item-block .project-perfil.project-adicionar-cesta, .project-add-item-block .project-header-user .project-perfil.project-adicionar-cesta, .project-header-user .gs-rright.project-overlayer, .project-header-user .project-add-item-block .project-overlayer.project-adicionar-cesta, .project-add-item-block .project-header-user .project-overlayer.project-adicionar-cesta, .project-loading .messages a.gs-rright {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .gs-bradius.gs-rtop, .project-footer .gs-rtop.project-overlayer, .project-footer .project-tabs .project-overlayer.project-btn-tab-active, .project-tabs .project-footer .project-overlayer.project-btn-tab-active, .project-footer .project-tabs .project-overlayer.btn-model-7, .project-tabs .project-footer .project-overlayer.btn-model-7, .gs-rtop.project-btn, .project-footer .gs-rtop.project-btn-news-footer, .project-footer .project-tabs .project-btn-news-footer.project-btn-tab-active, .project-tabs .project-footer .project-btn-news-footer.project-btn-tab-active, .gs-rtop.project-btn-big, .project-tabs .project-btn-big.project-btn-tab-active, .project-tabs .project-btn-tab-active.project-adicionar-cesta, .gs-rtop.project-adicionar-cesta, .gs-rtop.project-btn-shaddow, .project-tabs .project-btn-shaddow.project-btn-tab-active, .project-tabs .project-btn-tab-active.btn-model-5, .gs-rtop.btn-model-5, .gs-rtop.project-btn-tabs, .project-tabs .project-btn-tabs.project-btn-tab-active, .project-tabs .project-btn-tab-active.btn-model-6, .project-tabs .btn-model-7, .gs-rtop.btn-model-6, .gs-rtop.btn-model-7, .gs-rtop.project-btn-filters, .project-tabs .project-btn-filters.project-btn-tab-active, .gs-rtop.project-btn-highlight, .project-tabs .project-btn-highlight.project-btn-tab-active, .project-tabs .project-loading .project-btn-tab-active.status, .project-loading .project-tabs .project-btn-tab-active.status, .project-tabs .project-btn-tab-active.project-alerts, .project-loading .gs-rtop.status, .gs-rtop.project-alerts, .gs-rtop.project-btn-translucid, .project-tabs .project-btn-translucid.project-btn-tab-active, .project-tabs .project-btn.project-btn-tab-active, .project-tabs .options-container .double-btn .project-btn-tab-active.btn-left, .options-container .double-btn .project-tabs .project-btn-tab-active.btn-left, .project-tabs .options-container .double-btn .btn-left.btn-model-7, .options-container .double-btn .project-tabs .btn-left.btn-model-7,
  .project-tabs .options-container .double-btn .project-btn-tab-active.btn-right,
  .options-container .double-btn .project-tabs .project-btn-tab-active.btn-right,
  .project-tabs .options-container .double-btn .btn-right.btn-model-7,
  .options-container .double-btn .project-tabs .btn-right.btn-model-7, .project-tabs .options-container .double-btn .project-btn-tab-active.btn-periodos, .options-container .double-btn .project-tabs .project-btn-tab-active.btn-periodos, .project-tabs .options-container .double-btn .btn-periodos.btn-model-7, .options-container .double-btn .project-tabs .btn-periodos.btn-model-7,
  .project-tabs .options-container .double-btn .project-btn-tab-active.btn-dia-semana,
  .options-container .double-btn .project-tabs .project-btn-tab-active.btn-dia-semana,
  .project-tabs .options-container .double-btn .btn-dia-semana.btn-model-7,
  .options-container .double-btn .project-tabs .btn-dia-semana.btn-model-7,
  .project-tabs .options-container .double-btn .project-btn-tab-active.btn-recorrencia-assinatura,
  .options-container .double-btn .project-tabs .project-btn-tab-active.btn-recorrencia-assinatura,
  .project-tabs .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7,
  .options-container .double-btn .project-tabs .btn-recorrencia-assinatura.btn-model-7, .project-tabs .project-btn-tab-active.btn-model-8, .project-tabs .project-btn-tab-active.btn-model-9, .project-tabs .project-btn-tab-active.btn-model-10, .options-container .double-btn .gs-rtop.btn-left,
  .options-container .double-btn .gs-rtop.btn-right, .options-container .double-btn .gs-rtop.btn-periodos,
  .options-container .double-btn .gs-rtop.btn-dia-semana,
  .options-container .double-btn .gs-rtop.btn-recorrencia-assinatura, .gs-rtop.btn-model-8, .gs-rtop.btn-model-9, .gs-rtop.btn-model-10, .gs-rtop.project-floating-bubble, .project-tabs .project-floating-bubble.project-btn-tab-active, .project-tabs .project-floating-bubble.btn-model-7, .gs-rtop.project-total-products, .project-tabs .project-total-products.project-btn-tab-active, .project-tabs .project-total-products.btn-model-7, .project-tabs .gs-rtop.project-tabs-results, .project-tabs .project-tabs-results.project-btn-tab-active, .project-tabs .project-tabs-results.btn-model-7, .project-tabs .project-tabs-results .gs-rtop.project-btn-dark, .project-tabs .project-tabs-results .project-footer .gs-rtop.project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .gs-rtop.project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.project-btn-tab-active, .project-tabs .project-tabs-results .project-footer .project-btn-news-footer.project-btn-tab-active, .project-tabs .project-footer .project-tabs-results .project-btn-news-footer.project-btn-tab-active, .project-footer .project-tabs .project-tabs-results .project-btn-news-footer.btn-model-7, .project-tabs .project-tabs-results .project-footer .project-btn-news-footer.btn-model-7, .project-tabs .project-footer .project-tabs-results .project-btn-news-footer.btn-model-7, .project-tabs .project-tabs-results .project-btn-dark.project-btn-tab-active, .project-tabs .project-tabs-results .project-btn-dark.btn-model-7, .project-tabs .gs-bradius.project-btn-tab-active, .project-tabs .project-btn-tab-active.project-search-box, .project-tabs .project-header-user .project-btn-tab-active.project-perfil, .project-header-user .project-tabs .project-btn-tab-active.project-perfil, .project-tabs .project-header-user .project-btn-tab-active.project-overlayer, .project-header-user .project-tabs .project-btn-tab-active.project-overlayer, .project-tabs .project-loading .messages a.project-btn-tab-active, .project-loading .messages .project-tabs a.project-btn-tab-active, .project-tabs .project-loading .messages a.btn-model-7, .project-loading .messages .project-tabs a.btn-model-7, .gs-rtop.project-search-box, .project-tabs .project-search-box.btn-model-7, .project-header-user .gs-rtop.project-perfil, .project-header-user .project-tabs .project-perfil.btn-model-7, .project-tabs .project-header-user .project-perfil.btn-model-7, .project-header-user .gs-rtop.project-overlayer, .project-header-user .project-tabs .project-overlayer.btn-model-7, .project-tabs .project-header-user .project-overlayer.btn-model-7, .project-loading .messages a.gs-rtop {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0; }
  .gs-bradius.gs-rbottom, .project-footer .gs-rbottom.project-overlayer, .gs-rbottom.project-btn, .project-footer .gs-rbottom.project-btn-news-footer, .gs-rbottom.project-btn-big, .gs-rbottom.project-adicionar-cesta, .gs-rbottom.project-btn-shaddow, .gs-rbottom.btn-model-5, .gs-rbottom.project-btn-tabs, .gs-rbottom.btn-model-6, .gs-rbottom.btn-model-7, .gs-rbottom.project-btn-filters, .gs-rbottom.project-btn-highlight, .project-loading .gs-rbottom.status, .gs-rbottom.project-alerts, .gs-rbottom.project-btn-translucid, .options-container .double-btn .gs-rbottom.btn-left,
  .options-container .double-btn .gs-rbottom.btn-right, .options-container .double-btn .gs-rbottom.btn-periodos,
  .options-container .double-btn .gs-rbottom.btn-dia-semana,
  .options-container .double-btn .gs-rbottom.btn-recorrencia-assinatura, .gs-rbottom.btn-model-8, .gs-rbottom.btn-model-9, .gs-rbottom.btn-model-10, .gs-rbottom.project-floating-bubble, .gs-rbottom.project-total-products, .project-tabs .gs-rbottom.project-tabs-results, .project-tabs .project-tabs-results .gs-rbottom.project-btn-dark, .gs-rbottom.project-search-box, .project-header-user .gs-rbottom.project-perfil, .project-header-user .gs-rbottom.project-overlayer, .project-loading .messages a.gs-rbottom {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

/**
  * Botões
*/
.gs-btn, .project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
.options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
.options-container .double-btn .btn-dia-semana,
.options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10, .project-btn-dark {
  display: block;
  background: #ccc;
  padding: 12px 8px; }
  .gs-btn.gs-inline-block, .gs-inline-block.project-btn, .project-footer .gs-inline-block.project-btn-news-footer, .gs-inline-block.project-btn-big, .gs-inline-block.project-adicionar-cesta, .gs-inline-block.project-btn-shaddow, .gs-inline-block.btn-model-5, .gs-inline-block.project-btn-tabs, .gs-inline-block.btn-model-6, .gs-inline-block.btn-model-7, .gs-inline-block.project-btn-filters, .gs-inline-block.project-btn-highlight, .project-loading .gs-inline-block.status, .gs-inline-block.project-alerts, .gs-inline-block.project-btn-translucid, .options-container .double-btn .gs-inline-block.btn-left,
  .options-container .double-btn .gs-inline-block.btn-right, .options-container .double-btn .gs-inline-block.btn-periodos,
  .options-container .double-btn .gs-inline-block.btn-dia-semana,
  .options-container .double-btn .gs-inline-block.btn-recorrencia-assinatura, .gs-inline-block.btn-model-8, .gs-inline-block.btn-model-9, .gs-inline-block.btn-model-10, .gs-inline-block.project-btn-dark {
    display: inline-block; }
  .gs-btn.gs-inline, .gs-inline.project-btn, .project-footer .gs-inline.project-btn-news-footer, .project-footer .project-btn-news-footer.project-btn-highlight, .project-footer .project-btn-news-footer.project-alerts, .gs-inline.project-btn-big, .gs-inline.project-adicionar-cesta, .gs-inline.project-btn-shaddow, .gs-inline.btn-model-5, .gs-inline.project-btn-tabs, .gs-inline.btn-model-6, .gs-inline.btn-model-7, .gs-inline.project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .gs-inline.project-btn-translucid, .options-container .double-btn .gs-inline.btn-left, .options-container .double-btn .btn-left.project-btn-highlight, .options-container .double-btn .project-loading .btn-left.status, .project-loading .options-container .double-btn .btn-left.status, .options-container .double-btn .btn-left.project-alerts,
  .options-container .double-btn .gs-inline.btn-right,
  .options-container .double-btn .btn-right.project-btn-highlight,
  .options-container .double-btn .project-loading .btn-right.status,
  .project-loading .options-container .double-btn .btn-right.status,
  .options-container .double-btn .btn-right.project-alerts, .options-container .double-btn .gs-inline.btn-periodos, .options-container .double-btn .btn-periodos.project-btn-highlight, .options-container .double-btn .project-loading .btn-periodos.status, .project-loading .options-container .double-btn .btn-periodos.status, .options-container .double-btn .btn-periodos.project-alerts,
  .options-container .double-btn .gs-inline.btn-dia-semana,
  .options-container .double-btn .btn-dia-semana.project-btn-highlight,
  .options-container .double-btn .project-loading .btn-dia-semana.status,
  .project-loading .options-container .double-btn .btn-dia-semana.status,
  .options-container .double-btn .btn-dia-semana.project-alerts,
  .options-container .double-btn .gs-inline.btn-recorrencia-assinatura,
  .options-container .double-btn .btn-recorrencia-assinatura.project-btn-highlight,
  .options-container .double-btn .project-loading .btn-recorrencia-assinatura.status,
  .project-loading .options-container .double-btn .btn-recorrencia-assinatura.status,
  .options-container .double-btn .btn-recorrencia-assinatura.project-alerts, .gs-inline.btn-model-8, .gs-inline.btn-model-9, .gs-inline.btn-model-10, .gs-inline.project-btn-dark {
    display: inline; }
  .gs-btn.gs-hover, .gs-hover.project-btn, .project-footer .gs-hover.project-btn-news-footer, .project-footer .project-btn-news-footer.project-hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura, .project-footer .project-btn-news-footer.btn-model-5, .project-footer .project-btn-news-footer.btn-model-6, .project-footer .project-btn-news-footer.btn-model-8, .project-footer .project-btn-news-footer.btn-model-9, .project-footer .project-btn-news-footer.btn-model-10, .project-footer .project-btn-news-footer.project-adicionar-cesta, .project-btn.project-hover, .project-hover.project-btn-big, .options-container .double-btn .project-btn-big.btn-left, .options-container .double-btn .btn-left.project-adicionar-cesta,
  .options-container .double-btn .project-btn-big.btn-right,
  .options-container .double-btn .btn-right.project-adicionar-cesta, .options-container .double-btn .project-btn-big.btn-periodos, .options-container .double-btn .btn-periodos.project-adicionar-cesta,
  .options-container .double-btn .project-btn-big.btn-dia-semana,
  .options-container .double-btn .btn-dia-semana.project-adicionar-cesta,
  .options-container .double-btn .project-btn-big.btn-recorrencia-assinatura,
  .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta, .project-btn-big.btn-model-5, .btn-model-5.project-adicionar-cesta, .project-btn-big.btn-model-6, .btn-model-6.project-adicionar-cesta, .project-btn-big.btn-model-8, .btn-model-8.project-adicionar-cesta, .project-btn-big.btn-model-9, .btn-model-9.project-adicionar-cesta, .project-btn-big.btn-model-10, .btn-model-10.project-adicionar-cesta, .project-adicionar-cesta, .project-hover.project-btn-shaddow, .options-container .double-btn .project-btn-shaddow.btn-left, .options-container .double-btn .btn-left.btn-model-5,
  .options-container .double-btn .project-btn-shaddow.btn-right,
  .options-container .double-btn .btn-right.btn-model-5, .options-container .double-btn .project-btn-shaddow.btn-periodos, .options-container .double-btn .btn-periodos.btn-model-5,
  .options-container .double-btn .project-btn-shaddow.btn-dia-semana,
  .options-container .double-btn .btn-dia-semana.btn-model-5,
  .options-container .double-btn .project-btn-shaddow.btn-recorrencia-assinatura,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-5, .btn-model-5, .project-btn-shaddow.btn-model-6, .btn-model-6.btn-model-5, .project-btn-shaddow.btn-model-8, .btn-model-8.btn-model-5, .project-btn-shaddow.btn-model-9, .btn-model-9.btn-model-5, .project-btn-shaddow.btn-model-10, .btn-model-10.btn-model-5, .project-btn-shaddow.project-adicionar-cesta, .project-hover.project-btn-tabs, .options-container .double-btn .project-btn-tabs.btn-left, .options-container .double-btn .btn-left.btn-model-6, .options-container .double-btn .btn-left.btn-model-7,
  .options-container .double-btn .project-btn-tabs.btn-right,
  .options-container .double-btn .btn-right.btn-model-6,
  .options-container .double-btn .btn-right.btn-model-7, .options-container .double-btn .project-btn-tabs.btn-periodos, .options-container .double-btn .btn-periodos.btn-model-6, .options-container .double-btn .btn-periodos.btn-model-7,
  .options-container .double-btn .project-btn-tabs.btn-dia-semana,
  .options-container .double-btn .btn-dia-semana.btn-model-6,
  .options-container .double-btn .btn-dia-semana.btn-model-7,
  .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-6,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7, .project-btn-tabs.btn-model-5, .btn-model-5.btn-model-7, .btn-model-6, .project-hover.btn-model-7, .btn-model-7.btn-model-6, .btn-model-7.btn-model-8, .btn-model-7.btn-model-9, .btn-model-7.btn-model-10, .btn-model-7.project-adicionar-cesta, .project-btn-tabs.btn-model-8, .btn-model-8.btn-model-6, .project-btn-tabs.btn-model-9, .btn-model-9.btn-model-6, .project-btn-tabs.btn-model-10, .btn-model-10.btn-model-6, .project-btn-tabs.project-adicionar-cesta, .project-hover.project-btn-filters, .options-container .double-btn .project-btn-filters.btn-left,
  .options-container .double-btn .project-btn-filters.btn-right, .options-container .double-btn .project-btn-filters.btn-periodos,
  .options-container .double-btn .project-btn-filters.btn-dia-semana,
  .options-container .double-btn .project-btn-filters.btn-recorrencia-assinatura, .project-btn-filters.btn-model-5, .project-btn-filters.btn-model-6, .project-btn-filters.btn-model-8, .project-btn-filters.btn-model-9, .project-btn-filters.btn-model-10, .project-btn-filters.project-adicionar-cesta, .project-hover.project-btn-highlight, .project-loading .project-hover.status, .project-loading .options-container .double-btn .status.btn-left, .options-container .double-btn .project-loading .status.btn-left,
  .project-loading .options-container .double-btn .status.btn-right,
  .options-container .double-btn .project-loading .status.btn-right, .project-loading .options-container .double-btn .status.btn-periodos, .options-container .double-btn .project-loading .status.btn-periodos,
  .project-loading .options-container .double-btn .status.btn-dia-semana,
  .options-container .double-btn .project-loading .status.btn-dia-semana,
  .project-loading .options-container .double-btn .status.btn-recorrencia-assinatura,
  .options-container .double-btn .project-loading .status.btn-recorrencia-assinatura, .project-loading .status.btn-model-5, .project-loading .status.btn-model-6, .project-loading .status.btn-model-8, .project-loading .status.btn-model-9, .project-loading .status.btn-model-10, .project-loading .status.project-adicionar-cesta, .options-container .double-btn .project-btn-highlight.btn-left, .options-container .double-btn .btn-left.project-alerts,
  .options-container .double-btn .project-btn-highlight.btn-right,
  .options-container .double-btn .btn-right.project-alerts, .options-container .double-btn .project-btn-highlight.btn-periodos, .options-container .double-btn .btn-periodos.project-alerts,
  .options-container .double-btn .project-btn-highlight.btn-dia-semana,
  .options-container .double-btn .btn-dia-semana.project-alerts,
  .options-container .double-btn .project-btn-highlight.btn-recorrencia-assinatura,
  .options-container .double-btn .btn-recorrencia-assinatura.project-alerts, .project-btn-highlight.btn-model-5, .btn-model-5.project-alerts, .project-btn-highlight.btn-model-6, .btn-model-6.project-alerts, .project-btn-highlight.btn-model-8, .btn-model-8.project-alerts, .project-btn-highlight.btn-model-9, .btn-model-9.project-alerts, .project-btn-highlight.btn-model-10, .btn-model-10.project-alerts, .project-hover.project-alerts, .project-alerts.project-adicionar-cesta, .project-btn-highlight.project-adicionar-cesta, .project-hover.project-btn-translucid, .options-container .double-btn .project-btn-translucid.btn-left,
  .options-container .double-btn .project-btn-translucid.btn-right, .options-container .double-btn .project-btn-translucid.btn-periodos,
  .options-container .double-btn .project-btn-translucid.btn-dia-semana,
  .options-container .double-btn .project-btn-translucid.btn-recorrencia-assinatura, .project-btn-translucid.btn-model-5, .project-btn-translucid.btn-model-6, .project-btn-translucid.btn-model-8, .project-btn-translucid.btn-model-9, .project-btn-translucid.btn-model-10, .project-btn-translucid.project-adicionar-cesta, .options-container .double-btn .btn-left,
  .options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
  .options-container .double-btn .btn-dia-semana,
  .options-container .double-btn .btn-recorrencia-assinatura, .project-btn.btn-model-5, .btn-model-5.project-btn-shaddow, .btn-model-8, .btn-model-9, .btn-model-10, .gs-hover.project-btn-big, .project-btn-big.project-btn.project-hover, .project-btn-big.project-btn.btn-model-5, .project-btn-big.project-btn-dark.project-hover, .project-footer .project-btn-big.project-hover.project-btn-news-footer, .project-footer .project-btn-big.project-btn-news-footer.btn-model-5, .project-btn-big.project-btn-dark.btn-model-5, .project-btn-dark.project-adicionar-cesta, .project-adicionar-cesta.project-btn.project-hover, .project-btn.project-btn-dark.project-hover, .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-right, .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-recorrencia-assinatura, .project-footer .project-btn-big.project-btn-news-footer.btn-model-6, .project-footer .project-btn-big.project-btn-news-footer.btn-model-8, .project-footer .project-btn-big.project-btn-news-footer.btn-model-9, .project-footer .project-btn-big.project-btn-news-footer.btn-model-10, .options-container .double-btn .project-btn-dark.project-btn-big.btn-left, .options-container .double-btn .project-btn-dark.btn-left.project-adicionar-cesta,
  .options-container .double-btn .project-btn-dark.project-btn-big.btn-right,
  .options-container .double-btn .project-btn-dark.btn-right.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.project-btn-big.btn-periodos, .options-container .double-btn .project-btn-dark.btn-periodos.project-adicionar-cesta,
  .options-container .double-btn .project-btn-dark.project-btn-big.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-dia-semana.project-adicionar-cesta,
  .options-container .double-btn .project-btn-dark.project-btn-big.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.project-adicionar-cesta, .project-btn-dark.project-btn-big.btn-model-6, .project-btn-dark.project-btn-big.btn-model-8, .project-btn-dark.project-btn-big.btn-model-9, .project-btn-dark.project-btn-big.btn-model-10, .project-btn-dark.project-hover.project-btn-shaddow, .project-footer .project-hover.project-btn-shaddow.project-btn-news-footer, .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-right, .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-recorrencia-assinatura, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-6, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-8, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-9, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-10, .project-footer .project-btn-shaddow.project-btn-news-footer.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-left, .options-container .double-btn .project-btn-dark.btn-left.btn-model-5,
  .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-right,
  .options-container .double-btn .project-btn-dark.btn-right.btn-model-5, .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-periodos, .options-container .double-btn .project-btn-dark.btn-periodos.btn-model-5,
  .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-dia-semana.btn-model-5,
  .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.btn-model-5, .project-btn-dark.btn-model-5, .project-btn-dark.project-btn-shaddow.btn-model-6, .project-btn-dark.project-btn-shaddow.btn-model-8, .project-btn-dark.project-btn-shaddow.btn-model-9, .project-btn-dark.project-btn-shaddow.btn-model-10, .project-btn-dark.project-btn-shaddow.project-adicionar-cesta, .project-btn-dark.project-hover.project-btn-tabs, .project-footer .project-hover.project-btn-tabs.project-btn-news-footer, .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-left, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left.btn-model-7, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left.btn-model-7,
  .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-right,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right.btn-model-7,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right.btn-model-7, .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-periodos, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos.btn-model-7, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos.btn-model-7,
  .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana.btn-model-7,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana.btn-model-7,
  .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-recorrencia-assinatura,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura.btn-model-7,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura.btn-model-7, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-5, .project-footer .project-btn-news-footer.btn-model-5.btn-model-7, .project-footer .project-hover.project-btn-news-footer.btn-model-7, .project-footer .project-btn-news-footer.btn-model-7.btn-model-8, .project-footer .project-btn-news-footer.btn-model-7.btn-model-9, .project-footer .project-btn-news-footer.btn-model-7.btn-model-10, .project-footer .project-btn-news-footer.btn-model-7.project-adicionar-cesta, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-8, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-9, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-10, .project-footer .project-btn-tabs.project-btn-news-footer.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-left, .options-container .double-btn .project-btn-dark.btn-left.btn-model-6, .options-container .double-btn .project-btn-dark.btn-left.btn-model-7,
  .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-right,
  .options-container .double-btn .project-btn-dark.btn-right.btn-model-6,
  .options-container .double-btn .project-btn-dark.btn-right.btn-model-7, .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-periodos, .options-container .double-btn .project-btn-dark.btn-periodos.btn-model-6, .options-container .double-btn .project-btn-dark.btn-periodos.btn-model-7,
  .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-dia-semana.btn-model-6,
  .options-container .double-btn .project-btn-dark.btn-dia-semana.btn-model-7,
  .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.btn-model-6,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.btn-model-7, .project-btn-dark.project-btn-tabs.btn-model-5, .project-btn-dark.btn-model-5.btn-model-7, .project-btn-dark.btn-model-6, .project-btn-dark.project-hover.btn-model-7, .project-btn-dark.btn-model-7.btn-model-8, .project-btn-dark.btn-model-7.btn-model-9, .project-btn-dark.btn-model-7.btn-model-10, .project-btn-dark.btn-model-7.project-adicionar-cesta, .project-btn-dark.project-btn-tabs.btn-model-8, .project-btn-dark.project-btn-tabs.btn-model-9, .project-btn-dark.project-btn-tabs.btn-model-10, .project-btn-dark.project-btn-tabs.project-adicionar-cesta, .project-btn-dark.project-hover.project-btn-filters, .project-footer .project-hover.project-btn-filters.project-btn-news-footer, .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-right, .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-recorrencia-assinatura, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-5, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-6, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-8, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-9, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-10, .project-footer .project-btn-filters.project-btn-news-footer.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.project-btn-filters.btn-left,
  .options-container .double-btn .project-btn-dark.project-btn-filters.btn-right, .options-container .double-btn .project-btn-dark.project-btn-filters.btn-periodos,
  .options-container .double-btn .project-btn-dark.project-btn-filters.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.project-btn-filters.btn-recorrencia-assinatura, .project-btn-dark.project-btn-filters.btn-model-5, .project-btn-dark.project-btn-filters.btn-model-6, .project-btn-dark.project-btn-filters.btn-model-8, .project-btn-dark.project-btn-filters.btn-model-9, .project-btn-dark.project-btn-filters.btn-model-10, .project-btn-dark.project-btn-filters.project-adicionar-cesta, .project-btn-dark.project-hover.project-btn-highlight, .project-footer .project-hover.project-btn-highlight.project-btn-news-footer, .project-footer .project-loading .project-hover.project-btn-news-footer.status, .project-loading .project-footer .project-hover.project-btn-news-footer.status, .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-left, .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-left, .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-left, .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-left,
  .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-right,
  .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-right,
  .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-right,
  .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-right, .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-periodos, .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-periodos, .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-periodos, .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-periodos,
  .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-dia-semana,
  .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-dia-semana,
  .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-dia-semana,
  .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-dia-semana,
  .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-recorrencia-assinatura,
  .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-recorrencia-assinatura,
  .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-recorrencia-assinatura,
  .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-recorrencia-assinatura, .project-footer .project-loading .project-btn-news-footer.status.btn-model-5, .project-loading .project-footer .project-btn-news-footer.status.btn-model-5, .project-footer .project-loading .project-btn-news-footer.status.btn-model-6, .project-loading .project-footer .project-btn-news-footer.status.btn-model-6, .project-footer .project-loading .project-btn-news-footer.status.btn-model-8, .project-loading .project-footer .project-btn-news-footer.status.btn-model-8, .project-footer .project-loading .project-btn-news-footer.status.btn-model-9, .project-loading .project-footer .project-btn-news-footer.status.btn-model-9, .project-footer .project-loading .project-btn-news-footer.status.btn-model-10, .project-loading .project-footer .project-btn-news-footer.status.btn-model-10, .project-footer .project-loading .project-btn-news-footer.status.project-adicionar-cesta, .project-loading .project-footer .project-btn-news-footer.status.project-adicionar-cesta, .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-left, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left.project-alerts, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left.project-alerts,
  .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-right,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right.project-alerts,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right.project-alerts, .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-periodos, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos.project-alerts, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos.project-alerts,
  .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana.project-alerts,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana.project-alerts,
  .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-recorrencia-assinatura,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura.project-alerts,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura.project-alerts, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-5, .project-footer .project-btn-news-footer.btn-model-5.project-alerts, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-6, .project-footer .project-btn-news-footer.btn-model-6.project-alerts, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-8, .project-footer .project-btn-news-footer.btn-model-8.project-alerts, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-9, .project-footer .project-btn-news-footer.btn-model-9.project-alerts, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-10, .project-footer .project-btn-news-footer.btn-model-10.project-alerts, .project-footer .project-hover.project-btn-news-footer.project-alerts, .project-footer .project-btn-news-footer.project-alerts.project-adicionar-cesta, .project-footer .project-btn-highlight.project-btn-news-footer.project-adicionar-cesta, .project-loading .project-btn-dark.project-hover.status, .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-left,
  .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-right, .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-periodos,
  .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-dia-semana,
  .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-recorrencia-assinatura, .project-loading .options-container .double-btn .project-btn-dark.status.btn-left, .options-container .double-btn .project-loading .project-btn-dark.status.btn-left,
  .project-loading .options-container .double-btn .project-btn-dark.status.btn-right,
  .options-container .double-btn .project-loading .project-btn-dark.status.btn-right, .project-loading .options-container .double-btn .project-btn-dark.status.btn-periodos, .options-container .double-btn .project-loading .project-btn-dark.status.btn-periodos,
  .project-loading .options-container .double-btn .project-btn-dark.status.btn-dia-semana,
  .options-container .double-btn .project-loading .project-btn-dark.status.btn-dia-semana,
  .project-loading .options-container .double-btn .project-btn-dark.status.btn-recorrencia-assinatura,
  .options-container .double-btn .project-loading .project-btn-dark.status.btn-recorrencia-assinatura, .project-loading .project-btn-dark.status.btn-model-5, .project-loading .project-btn-dark.status.btn-model-6, .project-loading .project-btn-dark.status.btn-model-8, .project-loading .project-btn-dark.status.btn-model-9, .project-loading .project-btn-dark.status.btn-model-10, .project-loading .project-btn-dark.status.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-left, .options-container .double-btn .project-btn-dark.btn-left.project-alerts,
  .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-right,
  .options-container .double-btn .project-btn-dark.btn-right.project-alerts, .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-periodos, .options-container .double-btn .project-btn-dark.btn-periodos.project-alerts,
  .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-dia-semana.project-alerts,
  .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.project-alerts, .project-btn-dark.project-btn-highlight.btn-model-5, .project-btn-dark.btn-model-5.project-alerts, .project-btn-dark.project-btn-highlight.btn-model-6, .project-btn-dark.btn-model-6.project-alerts, .project-btn-dark.project-btn-highlight.btn-model-8, .project-btn-dark.btn-model-8.project-alerts, .project-btn-dark.project-btn-highlight.btn-model-9, .project-btn-dark.btn-model-9.project-alerts, .project-btn-dark.project-btn-highlight.btn-model-10, .project-btn-dark.btn-model-10.project-alerts, .project-btn-dark.project-hover.project-alerts, .project-btn-dark.project-alerts.project-adicionar-cesta, .project-btn-dark.project-btn-highlight.project-adicionar-cesta, .project-btn-dark.project-hover.project-btn-translucid, .project-footer .project-hover.project-btn-translucid.project-btn-news-footer, .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-right, .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-recorrencia-assinatura, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-5, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-6, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-8, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-9, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-10, .project-footer .project-btn-translucid.project-btn-news-footer.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-left,
  .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-right, .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-periodos,
  .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-recorrencia-assinatura, .project-btn-dark.project-btn-translucid.btn-model-5, .project-btn-dark.project-btn-translucid.btn-model-6, .project-btn-dark.project-btn-translucid.btn-model-8, .project-btn-dark.project-btn-translucid.btn-model-9, .project-btn-dark.project-btn-translucid.btn-model-10, .project-btn-dark.project-btn-translucid.project-adicionar-cesta, .options-container .double-btn .project-btn-dark.btn-left,
  .options-container .double-btn .project-btn-dark.btn-right, .options-container .double-btn .project-btn-dark.btn-periodos,
  .options-container .double-btn .project-btn-dark.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura, .project-footer .btn-model-7.project-btn-news-footer.btn-model-6, .project-btn-dark.btn-model-7.btn-model-6, .project-btn-dark.btn-model-8, .project-btn-dark.btn-model-9, .project-btn-dark.btn-model-10, .gs-hover.project-btn-shaddow, .project-btn-shaddow.project-btn.project-hover, .gs-hover.btn-model-5, .gs-hover.project-btn-tabs, .project-btn-tabs.project-btn.project-hover, .project-btn-tabs.project-btn.btn-model-5, .btn-model-6.project-btn.project-hover, .btn-model-6.project-btn.btn-model-5, .gs-hover.btn-model-7, .btn-model-7.project-btn.project-hover, .btn-model-7.project-btn.btn-model-5, .gs-hover.project-btn-filters, .project-btn-filters.project-btn.project-hover, .project-btn-filters.project-btn.btn-model-5, .gs-hover.project-btn-highlight, .project-btn-highlight.project-btn.project-hover, .project-loading .project-btn.project-hover.status, .project-loading .project-btn.status.btn-model-5, .project-btn-highlight.project-btn.btn-model-5, .project-btn.btn-model-5.project-alerts, .project-btn.project-hover.project-alerts, .project-loading .gs-hover.status, .gs-hover.project-alerts, .gs-hover.project-btn-translucid, .project-btn-translucid.project-btn.project-hover, .project-btn-translucid.project-btn.btn-model-5, .btn-model-8.project-btn.project-hover, .options-container .double-btn .btn-model-8.btn-left,
  .options-container .double-btn .btn-model-8.btn-right, .options-container .double-btn .btn-model-8.btn-periodos,
  .options-container .double-btn .btn-model-8.btn-dia-semana,
  .options-container .double-btn .btn-model-8.btn-recorrencia-assinatura, .btn-model-8.project-btn.btn-model-5, .btn-model-8.btn-model-9, .btn-model-8.btn-model-10, .btn-model-9.project-btn.project-hover, .options-container .double-btn .btn-model-9.btn-left,
  .options-container .double-btn .btn-model-9.btn-right, .options-container .double-btn .btn-model-9.btn-periodos,
  .options-container .double-btn .btn-model-9.btn-dia-semana,
  .options-container .double-btn .btn-model-9.btn-recorrencia-assinatura, .btn-model-9.project-btn.btn-model-5, .btn-model-9.btn-model-10, .btn-model-10.project-btn.project-hover, .options-container .double-btn .btn-model-10.btn-left,
  .options-container .double-btn .btn-model-10.btn-right, .options-container .double-btn .btn-model-10.btn-periodos,
  .options-container .double-btn .btn-model-10.btn-dia-semana,
  .options-container .double-btn .btn-model-10.btn-recorrencia-assinatura, .btn-model-10.project-btn.btn-model-5, .project-adicionar-cesta.project-btn.btn-model-5, .gs-btn.project-btn.project-hover, .gs-btn.project-hover.project-btn-big, .gs-btn.project-btn-big.btn-model-5, .gs-btn.project-adicionar-cesta, .project-adicionar-cesta.project-btn, .gs-btn.project-hover.project-btn-shaddow, .options-container .double-btn .gs-btn.project-btn-shaddow.btn-left, .options-container .double-btn .project-btn-shaddow.btn-left.project-btn, .options-container .double-btn .btn-left.project-btn.btn-model-5, .options-container .double-btn .project-footer .btn-left.project-btn-news-footer.btn-model-5, .project-footer .options-container .double-btn .btn-left.project-btn-news-footer.btn-model-5, .options-container .double-btn .gs-btn.btn-left.btn-model-5,
  .options-container .double-btn .gs-btn.project-btn-shaddow.btn-right,
  .options-container .double-btn .project-btn-shaddow.btn-right.project-btn,
  .options-container .double-btn .btn-right.project-btn.btn-model-5,
  .options-container .double-btn .project-footer .btn-right.project-btn-news-footer.btn-model-5,
  .project-footer .options-container .double-btn .btn-right.project-btn-news-footer.btn-model-5,
  .options-container .double-btn .gs-btn.btn-right.btn-model-5, .options-container .double-btn .gs-btn.project-btn-shaddow.btn-periodos, .options-container .double-btn .project-btn-shaddow.btn-periodos.project-btn, .options-container .double-btn .btn-periodos.project-btn.btn-model-5, .options-container .double-btn .project-footer .btn-periodos.project-btn-news-footer.btn-model-5, .project-footer .options-container .double-btn .btn-periodos.project-btn-news-footer.btn-model-5, .options-container .double-btn .gs-btn.btn-periodos.btn-model-5,
  .options-container .double-btn .gs-btn.project-btn-shaddow.btn-dia-semana,
  .options-container .double-btn .project-btn-shaddow.btn-dia-semana.project-btn,
  .options-container .double-btn .btn-dia-semana.project-btn.btn-model-5,
  .options-container .double-btn .project-footer .btn-dia-semana.project-btn-news-footer.btn-model-5,
  .project-footer .options-container .double-btn .btn-dia-semana.project-btn-news-footer.btn-model-5,
  .options-container .double-btn .gs-btn.btn-dia-semana.btn-model-5,
  .options-container .double-btn .gs-btn.project-btn-shaddow.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-shaddow.btn-recorrencia-assinatura.project-btn,
  .options-container .double-btn .btn-recorrencia-assinatura.project-btn.btn-model-5,
  .options-container .double-btn .project-footer .btn-recorrencia-assinatura.project-btn-news-footer.btn-model-5,
  .project-footer .options-container .double-btn .btn-recorrencia-assinatura.project-btn-news-footer.btn-model-5,
  .options-container .double-btn .gs-btn.btn-recorrencia-assinatura.btn-model-5, .gs-btn.btn-model-5, .gs-btn.project-btn-shaddow.btn-model-6, .project-btn-shaddow.btn-model-6.project-btn, .project-footer .btn-model-6.project-btn-news-footer.btn-model-5, .btn-model-6.project-btn-dark.btn-model-5, .gs-btn.btn-model-6.btn-model-5, .gs-btn.project-btn-shaddow.btn-model-8, .project-btn-shaddow.btn-model-8.project-btn, .project-footer .btn-model-8.project-btn-news-footer.btn-model-5, .btn-model-8.project-btn-dark.btn-model-5, .gs-btn.btn-model-8.btn-model-5, .gs-btn.project-btn-shaddow.btn-model-9, .project-btn-shaddow.btn-model-9.project-btn, .project-footer .btn-model-9.project-btn-news-footer.btn-model-5, .btn-model-9.project-btn-dark.btn-model-5, .gs-btn.btn-model-9.btn-model-5, .gs-btn.project-btn-shaddow.btn-model-10, .project-btn-shaddow.btn-model-10.project-btn, .project-footer .btn-model-10.project-btn-news-footer.btn-model-5, .btn-model-10.project-btn-dark.btn-model-5, .gs-btn.btn-model-10.btn-model-5, .gs-btn.project-btn-shaddow.project-adicionar-cesta, .project-btn-shaddow.project-adicionar-cesta.project-btn, .project-footer .project-adicionar-cesta.project-btn-news-footer.btn-model-5, .project-adicionar-cesta.project-btn-dark.btn-model-5, .gs-btn.project-adicionar-cesta.btn-model-5, .gs-btn.project-hover.project-btn-tabs, .options-container .double-btn .gs-btn.project-btn-tabs.btn-left, .options-container .double-btn .project-btn-tabs.btn-left.project-btn,
  .options-container .double-btn .gs-btn.project-btn-tabs.btn-right,
  .options-container .double-btn .project-btn-tabs.btn-right.project-btn, .options-container .double-btn .gs-btn.project-btn-tabs.btn-periodos, .options-container .double-btn .project-btn-tabs.btn-periodos.project-btn,
  .options-container .double-btn .gs-btn.project-btn-tabs.btn-dia-semana,
  .options-container .double-btn .project-btn-tabs.btn-dia-semana.project-btn,
  .options-container .double-btn .gs-btn.project-btn-tabs.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura.project-btn, .gs-btn.project-btn-tabs.btn-model-5, .gs-btn.btn-model-6, .btn-model-6.project-btn, .gs-btn.project-hover.btn-model-7, .gs-btn.btn-model-7.btn-model-5, .gs-btn.project-btn-tabs.btn-model-8, .project-btn-tabs.btn-model-8.project-btn, .gs-btn.project-btn-tabs.btn-model-9, .project-btn-tabs.btn-model-9.project-btn, .gs-btn.project-btn-tabs.btn-model-10, .project-btn-tabs.btn-model-10.project-btn, .gs-btn.project-btn-tabs.project-adicionar-cesta, .project-btn-tabs.project-adicionar-cesta.project-btn, .gs-btn.project-hover.project-btn-filters, .gs-btn.project-btn-filters.btn-model-5, .gs-btn.project-hover.project-btn-highlight, .project-loading .gs-btn.project-hover.status, .project-loading .gs-btn.status.btn-model-5, .options-container .double-btn .gs-btn.project-btn-highlight.btn-left, .options-container .double-btn .project-btn-highlight.btn-left.project-btn, .options-container .double-btn .project-loading .btn-left.project-btn.status, .project-loading .options-container .double-btn .btn-left.project-btn.status, .options-container .double-btn .btn-left.project-btn.project-alerts, .options-container .double-btn .project-loading .gs-btn.btn-left.status, .project-loading .options-container .double-btn .gs-btn.btn-left.status, .options-container .double-btn .gs-btn.btn-left.project-alerts,
  .options-container .double-btn .gs-btn.project-btn-highlight.btn-right,
  .options-container .double-btn .project-btn-highlight.btn-right.project-btn,
  .options-container .double-btn .project-loading .btn-right.project-btn.status,
  .project-loading .options-container .double-btn .btn-right.project-btn.status,
  .options-container .double-btn .btn-right.project-btn.project-alerts,
  .options-container .double-btn .project-loading .gs-btn.btn-right.status,
  .project-loading .options-container .double-btn .gs-btn.btn-right.status,
  .options-container .double-btn .gs-btn.btn-right.project-alerts, .options-container .double-btn .gs-btn.project-btn-highlight.btn-periodos, .options-container .double-btn .project-btn-highlight.btn-periodos.project-btn, .options-container .double-btn .project-loading .btn-periodos.project-btn.status, .project-loading .options-container .double-btn .btn-periodos.project-btn.status, .options-container .double-btn .btn-periodos.project-btn.project-alerts, .options-container .double-btn .project-loading .gs-btn.btn-periodos.status, .project-loading .options-container .double-btn .gs-btn.btn-periodos.status, .options-container .double-btn .gs-btn.btn-periodos.project-alerts,
  .options-container .double-btn .gs-btn.project-btn-highlight.btn-dia-semana,
  .options-container .double-btn .project-btn-highlight.btn-dia-semana.project-btn,
  .options-container .double-btn .project-loading .btn-dia-semana.project-btn.status,
  .project-loading .options-container .double-btn .btn-dia-semana.project-btn.status,
  .options-container .double-btn .btn-dia-semana.project-btn.project-alerts,
  .options-container .double-btn .project-loading .gs-btn.btn-dia-semana.status,
  .project-loading .options-container .double-btn .gs-btn.btn-dia-semana.status,
  .options-container .double-btn .gs-btn.btn-dia-semana.project-alerts,
  .options-container .double-btn .gs-btn.project-btn-highlight.btn-recorrencia-assinatura,
  .options-container .double-btn .project-btn-highlight.btn-recorrencia-assinatura.project-btn,
  .options-container .double-btn .project-loading .btn-recorrencia-assinatura.project-btn.status,
  .project-loading .options-container .double-btn .btn-recorrencia-assinatura.project-btn.status,
  .options-container .double-btn .btn-recorrencia-assinatura.project-btn.project-alerts,
  .options-container .double-btn .project-loading .gs-btn.btn-recorrencia-assinatura.status,
  .project-loading .options-container .double-btn .gs-btn.btn-recorrencia-assinatura.status,
  .options-container .double-btn .gs-btn.btn-recorrencia-assinatura.project-alerts, .gs-btn.project-btn-highlight.btn-model-5, .gs-btn.btn-model-5.project-alerts, .gs-btn.project-btn-highlight.btn-model-6, .project-btn-highlight.btn-model-6.project-btn, .project-loading .btn-model-6.project-btn.status, .btn-model-6.project-btn.project-alerts, .project-loading .gs-btn.btn-model-6.status, .gs-btn.btn-model-6.project-alerts, .gs-btn.project-btn-highlight.btn-model-8, .project-btn-highlight.btn-model-8.project-btn, .project-loading .btn-model-8.project-btn.status, .btn-model-8.project-btn.project-alerts, .project-loading .gs-btn.btn-model-8.status, .gs-btn.btn-model-8.project-alerts, .gs-btn.project-btn-highlight.btn-model-9, .project-btn-highlight.btn-model-9.project-btn, .project-loading .btn-model-9.project-btn.status, .btn-model-9.project-btn.project-alerts, .project-loading .gs-btn.btn-model-9.status, .gs-btn.btn-model-9.project-alerts, .gs-btn.project-btn-highlight.btn-model-10, .project-btn-highlight.btn-model-10.project-btn, .project-loading .btn-model-10.project-btn.status, .btn-model-10.project-btn.project-alerts, .project-loading .gs-btn.btn-model-10.status, .gs-btn.btn-model-10.project-alerts, .gs-btn.project-hover.project-alerts, .gs-btn.project-btn-highlight.project-adicionar-cesta, .project-btn-highlight.project-adicionar-cesta.project-btn, .project-loading .project-adicionar-cesta.project-btn.status, .project-adicionar-cesta.project-btn.project-alerts, .project-loading .gs-btn.project-adicionar-cesta.status, .gs-btn.project-adicionar-cesta.project-alerts, .gs-btn.project-hover.project-btn-translucid, .gs-btn.project-btn-translucid.btn-model-5, .gs-btn.project-btn.btn-model-5, .btn-model-6.project-btn-tabs, .gs-btn.btn-model-8, .btn-model-8.project-btn, .gs-btn.btn-model-9, .btn-model-9.project-btn, .gs-btn.btn-model-10, .btn-model-10.project-btn, .project-adicionar-cesta.project-btn-big, .gs-hover.project-btn-dark, .project-footer .project-btn-news-footer.project-btn.project-hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left.project-adicionar-cesta, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left.project-adicionar-cesta,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right.project-adicionar-cesta,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right.project-adicionar-cesta, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos.project-adicionar-cesta, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos.project-adicionar-cesta,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana.project-adicionar-cesta,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana.project-adicionar-cesta,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura.project-adicionar-cesta,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura.project-adicionar-cesta, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left.btn-model-6, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left.btn-model-6,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right.btn-model-6,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right.btn-model-6, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos.btn-model-6, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos.btn-model-6,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana.btn-model-6,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana.btn-model-6,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura.btn-model-6,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura.btn-model-6, .project-footer .project-btn-news-footer.project-btn-dark.project-hover, .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-left, .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-left,
  .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-right,
  .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-right, .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-periodos, .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-recorrencia-assinatura, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-5, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-6, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-8, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-9, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-10, .project-footer .project-btn-news-footer.project-btn-dark.project-adicionar-cesta, .project-btn-dark.project-hover, .gs-btn.project-btn-dark.project-hover, .project-footer .gs-btn.project-hover.project-btn-news-footer, .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-8.btn-left, .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-8.btn-left,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-8.btn-right,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-8.btn-right, .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-8.btn-periodos, .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-8.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-8.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-8.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-8.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-8.btn-recorrencia-assinatura, .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-9.btn-left, .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-9.btn-left,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-9.btn-right,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-9.btn-right, .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-9.btn-periodos, .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-9.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-9.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-9.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-9.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-9.btn-recorrencia-assinatura, .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-10.btn-left, .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-10.btn-left,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-10.btn-right,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-10.btn-right, .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-10.btn-periodos, .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-10.btn-periodos,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-10.btn-dia-semana,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-10.btn-dia-semana,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-model-10.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-model-10.btn-recorrencia-assinatura, .options-container .double-btn .project-btn-dark.btn-model-8.btn-left,
  .options-container .double-btn .project-btn-dark.btn-model-8.btn-right, .options-container .double-btn .project-btn-dark.btn-model-8.btn-periodos,
  .options-container .double-btn .project-btn-dark.btn-model-8.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-model-8.btn-recorrencia-assinatura, .options-container .double-btn .project-btn-dark.btn-model-9.btn-left,
  .options-container .double-btn .project-btn-dark.btn-model-9.btn-right, .options-container .double-btn .project-btn-dark.btn-model-9.btn-periodos,
  .options-container .double-btn .project-btn-dark.btn-model-9.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-model-9.btn-recorrencia-assinatura, .options-container .double-btn .project-btn-dark.btn-model-10.btn-left,
  .options-container .double-btn .project-btn-dark.btn-model-10.btn-right, .options-container .double-btn .project-btn-dark.btn-model-10.btn-periodos,
  .options-container .double-btn .project-btn-dark.btn-model-10.btn-dia-semana,
  .options-container .double-btn .project-btn-dark.btn-model-10.btn-recorrencia-assinatura {
    cursor: pointer; }
    .gs-btn.gs-hover:hover, .gs-hover.project-btn:hover, .project-footer .gs-hover.project-btn-news-footer:hover, .project-footer .project-btn-news-footer.project-hover:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-news-footer.project-adicionar-cesta:hover, .project-btn.project-hover:hover, .project-hover.project-btn-big:hover, .options-container .double-btn .project-btn-big.btn-left:hover, .options-container .double-btn .btn-left.project-adicionar-cesta:hover,
    .options-container .double-btn .project-btn-big.btn-right:hover,
    .options-container .double-btn .btn-right.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-big.btn-periodos:hover, .options-container .double-btn .btn-periodos.project-adicionar-cesta:hover,
    .options-container .double-btn .project-btn-big.btn-dia-semana:hover,
    .options-container .double-btn .btn-dia-semana.project-adicionar-cesta:hover,
    .options-container .double-btn .project-btn-big.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta:hover, .project-btn-big.btn-model-5:hover, .project-btn-big.btn-model-6:hover, .project-btn-big.btn-model-8:hover, .project-btn-big.btn-model-9:hover, .project-btn-big.btn-model-10:hover, .project-adicionar-cesta:hover, .project-hover.project-btn-shaddow:hover, .options-container .double-btn .project-btn-shaddow.btn-left:hover, .options-container .double-btn .btn-left.btn-model-5:hover,
    .options-container .double-btn .project-btn-shaddow.btn-right:hover,
    .options-container .double-btn .btn-right.btn-model-5:hover, .options-container .double-btn .project-btn-shaddow.btn-periodos:hover, .options-container .double-btn .btn-periodos.btn-model-5:hover,
    .options-container .double-btn .project-btn-shaddow.btn-dia-semana:hover,
    .options-container .double-btn .btn-dia-semana.btn-model-5:hover,
    .options-container .double-btn .project-btn-shaddow.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.btn-model-5:hover, .btn-model-5:hover, .project-btn-shaddow.btn-model-6:hover, .project-btn-shaddow.btn-model-8:hover, .project-btn-shaddow.btn-model-9:hover, .project-btn-shaddow.btn-model-10:hover, .project-btn-shaddow.project-adicionar-cesta:hover, .project-hover.project-btn-tabs:hover, .options-container .double-btn .project-btn-tabs.btn-left:hover, .options-container .double-btn .btn-left.btn-model-6:hover, .options-container .double-btn .btn-left.btn-model-7:hover,
    .options-container .double-btn .project-btn-tabs.btn-right:hover,
    .options-container .double-btn .btn-right.btn-model-6:hover,
    .options-container .double-btn .btn-right.btn-model-7:hover, .options-container .double-btn .project-btn-tabs.btn-periodos:hover, .options-container .double-btn .btn-periodos.btn-model-6:hover, .options-container .double-btn .btn-periodos.btn-model-7:hover,
    .options-container .double-btn .project-btn-tabs.btn-dia-semana:hover,
    .options-container .double-btn .btn-dia-semana.btn-model-6:hover,
    .options-container .double-btn .btn-dia-semana.btn-model-7:hover,
    .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.btn-model-6:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7:hover, .project-btn-tabs.btn-model-5:hover, .btn-model-5.btn-model-7:hover, .btn-model-6:hover, .project-hover.btn-model-7:hover, .btn-model-7.btn-model-8:hover, .btn-model-7.btn-model-9:hover, .btn-model-7.btn-model-10:hover, .btn-model-7.project-adicionar-cesta:hover, .project-btn-tabs.btn-model-8:hover, .project-btn-tabs.btn-model-9:hover, .project-btn-tabs.btn-model-10:hover, .project-btn-tabs.project-adicionar-cesta:hover, .project-hover.project-btn-filters:hover, .options-container .double-btn .project-btn-filters.btn-left:hover,
    .options-container .double-btn .project-btn-filters.btn-right:hover, .options-container .double-btn .project-btn-filters.btn-periodos:hover,
    .options-container .double-btn .project-btn-filters.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-filters.btn-recorrencia-assinatura:hover, .project-btn-filters.btn-model-5:hover, .project-btn-filters.btn-model-6:hover, .project-btn-filters.btn-model-8:hover, .project-btn-filters.btn-model-9:hover, .project-btn-filters.btn-model-10:hover, .project-btn-filters.project-adicionar-cesta:hover, .project-hover.project-btn-highlight:hover, .project-loading .project-hover.status:hover, .project-loading .options-container .double-btn .status.btn-left:hover, .options-container .double-btn .project-loading .status.btn-left:hover,
    .project-loading .options-container .double-btn .status.btn-right:hover,
    .options-container .double-btn .project-loading .status.btn-right:hover, .project-loading .options-container .double-btn .status.btn-periodos:hover, .options-container .double-btn .project-loading .status.btn-periodos:hover,
    .project-loading .options-container .double-btn .status.btn-dia-semana:hover,
    .options-container .double-btn .project-loading .status.btn-dia-semana:hover,
    .project-loading .options-container .double-btn .status.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-loading .status.btn-recorrencia-assinatura:hover, .project-loading .status.btn-model-5:hover, .project-loading .status.btn-model-6:hover, .project-loading .status.btn-model-8:hover, .project-loading .status.btn-model-9:hover, .project-loading .status.btn-model-10:hover, .project-loading .status.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-highlight.btn-left:hover, .options-container .double-btn .btn-left.project-alerts:hover,
    .options-container .double-btn .project-btn-highlight.btn-right:hover,
    .options-container .double-btn .btn-right.project-alerts:hover, .options-container .double-btn .project-btn-highlight.btn-periodos:hover, .options-container .double-btn .btn-periodos.project-alerts:hover,
    .options-container .double-btn .project-btn-highlight.btn-dia-semana:hover,
    .options-container .double-btn .btn-dia-semana.project-alerts:hover,
    .options-container .double-btn .project-btn-highlight.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.project-alerts:hover, .project-btn-highlight.btn-model-5:hover, .btn-model-5.project-alerts:hover, .project-btn-highlight.btn-model-6:hover, .btn-model-6.project-alerts:hover, .project-btn-highlight.btn-model-8:hover, .btn-model-8.project-alerts:hover, .project-btn-highlight.btn-model-9:hover, .btn-model-9.project-alerts:hover, .project-btn-highlight.btn-model-10:hover, .btn-model-10.project-alerts:hover, .project-hover.project-alerts:hover, .project-alerts.project-adicionar-cesta:hover, .project-btn-highlight.project-adicionar-cesta:hover, .project-hover.project-btn-translucid:hover, .options-container .double-btn .project-btn-translucid.btn-left:hover,
    .options-container .double-btn .project-btn-translucid.btn-right:hover, .options-container .double-btn .project-btn-translucid.btn-periodos:hover,
    .options-container .double-btn .project-btn-translucid.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-translucid.btn-recorrencia-assinatura:hover, .project-btn-translucid.btn-model-5:hover, .project-btn-translucid.btn-model-6:hover, .project-btn-translucid.btn-model-8:hover, .project-btn-translucid.btn-model-9:hover, .project-btn-translucid.btn-model-10:hover, .project-btn-translucid.project-adicionar-cesta:hover, .options-container .double-btn .btn-left:hover,
    .options-container .double-btn .btn-right:hover, .options-container .double-btn .btn-periodos:hover,
    .options-container .double-btn .btn-dia-semana:hover,
    .options-container .double-btn .btn-recorrencia-assinatura:hover, .btn-model-7.btn-model-6:hover, .btn-model-8:hover, .btn-model-9:hover, .btn-model-10:hover, .gs-hover.project-btn-big:hover, .project-btn-big.project-btn.project-hover:hover, .project-btn-big.project-btn.btn-model-5:hover, .project-btn-big.project-btn-dark.project-hover:hover, .project-footer .project-btn-big.project-hover.project-btn-news-footer:hover, .project-footer .project-btn-big.project-btn-news-footer.btn-model-5:hover, .project-btn-big.project-btn-dark.btn-model-5:hover, .project-btn.project-btn-dark.project-hover:hover, .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-big.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-big.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-big.project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-big.project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-big.project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-big.project-btn-news-footer.btn-model-10:hover, .options-container .double-btn .project-btn-dark.project-btn-big.btn-left:hover,
    .options-container .double-btn .project-btn-dark.project-btn-big.btn-right:hover, .options-container .double-btn .project-btn-dark.project-btn-big.btn-periodos:hover,
    .options-container .double-btn .project-btn-dark.project-btn-big.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.project-btn-big.btn-recorrencia-assinatura:hover, .project-btn-dark.project-btn-big.btn-model-6:hover, .project-btn-dark.project-btn-big.btn-model-8:hover, .project-btn-dark.project-btn-big.btn-model-9:hover, .project-btn-dark.project-btn-big.btn-model-10:hover, .project-btn-dark.project-adicionar-cesta:hover, .project-btn-dark.project-hover.project-btn-shaddow:hover, .project-footer .project-hover.project-btn-shaddow.project-btn-news-footer:hover, .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-shaddow.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-shaddow.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-shaddow.project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-shaddow.project-btn-news-footer.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-left:hover,
    .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-right:hover, .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-periodos:hover,
    .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.project-btn-shaddow.btn-recorrencia-assinatura:hover, .project-btn-dark.btn-model-5:hover, .project-btn-dark.project-btn-shaddow.btn-model-6:hover, .project-btn-dark.project-btn-shaddow.btn-model-8:hover, .project-btn-dark.project-btn-shaddow.btn-model-9:hover, .project-btn-dark.project-btn-shaddow.btn-model-10:hover, .project-btn-dark.project-btn-shaddow.project-adicionar-cesta:hover, .project-btn-dark.project-hover.project-btn-tabs:hover, .project-footer .project-hover.project-btn-tabs.project-btn-news-footer:hover, .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-left:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left.btn-model-7:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left.btn-model-7:hover,
    .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-right:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-right.btn-model-7:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-right.btn-model-7:hover, .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-periodos:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos.btn-model-7:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos.btn-model-7:hover,
    .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana.btn-model-7:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana.btn-model-7:hover,
    .project-footer .options-container .double-btn .project-btn-tabs.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-tabs.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura.btn-model-7:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura.btn-model-7:hover, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-news-footer.btn-model-5.btn-model-7:hover, .project-footer .project-hover.project-btn-news-footer.btn-model-7:hover, .project-footer .project-btn-news-footer.btn-model-7.btn-model-8:hover, .project-footer .project-btn-news-footer.btn-model-7.btn-model-9:hover, .project-footer .project-btn-news-footer.btn-model-7.btn-model-10:hover, .project-footer .project-btn-news-footer.btn-model-7.project-adicionar-cesta:hover, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-tabs.project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-tabs.project-btn-news-footer.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-left:hover, .options-container .double-btn .project-btn-dark.btn-left.btn-model-7:hover,
    .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-right:hover,
    .options-container .double-btn .project-btn-dark.btn-right.btn-model-7:hover, .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-periodos:hover, .options-container .double-btn .project-btn-dark.btn-periodos.btn-model-7:hover,
    .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.btn-dia-semana.btn-model-7:hover,
    .options-container .double-btn .project-btn-dark.project-btn-tabs.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.btn-model-7:hover, .project-btn-dark.project-btn-tabs.btn-model-5:hover, .project-btn-dark.btn-model-5.btn-model-7:hover, .project-btn-dark.btn-model-6:hover, .project-btn-dark.project-hover.btn-model-7:hover, .project-btn-dark.btn-model-7.btn-model-8:hover, .project-btn-dark.btn-model-7.btn-model-9:hover, .project-btn-dark.btn-model-7.btn-model-10:hover, .project-btn-dark.btn-model-7.project-adicionar-cesta:hover, .project-btn-dark.project-btn-tabs.btn-model-8:hover, .project-btn-dark.project-btn-tabs.btn-model-9:hover, .project-btn-dark.project-btn-tabs.btn-model-10:hover, .project-btn-dark.project-btn-tabs.project-adicionar-cesta:hover, .project-btn-dark.project-hover.project-btn-filters:hover, .project-footer .project-hover.project-btn-filters.project-btn-news-footer:hover, .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-filters.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-filters.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-filters.project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-filters.project-btn-news-footer.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.project-btn-filters.btn-left:hover,
    .options-container .double-btn .project-btn-dark.project-btn-filters.btn-right:hover, .options-container .double-btn .project-btn-dark.project-btn-filters.btn-periodos:hover,
    .options-container .double-btn .project-btn-dark.project-btn-filters.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.project-btn-filters.btn-recorrencia-assinatura:hover, .project-btn-dark.project-btn-filters.btn-model-5:hover, .project-btn-dark.project-btn-filters.btn-model-6:hover, .project-btn-dark.project-btn-filters.btn-model-8:hover, .project-btn-dark.project-btn-filters.btn-model-9:hover, .project-btn-dark.project-btn-filters.btn-model-10:hover, .project-btn-dark.project-btn-filters.project-adicionar-cesta:hover, .project-btn-dark.project-hover.project-btn-highlight:hover, .project-footer .project-hover.project-btn-highlight.project-btn-news-footer:hover, .project-footer .project-loading .project-hover.project-btn-news-footer.status:hover, .project-loading .project-footer .project-hover.project-btn-news-footer.status:hover, .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-left:hover, .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-left:hover, .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-left:hover, .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-left:hover,
    .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-right:hover,
    .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-right:hover,
    .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-right:hover,
    .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-right:hover, .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-periodos:hover, .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-periodos:hover, .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-periodos:hover, .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-periodos:hover,
    .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-dia-semana:hover,
    .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-dia-semana:hover,
    .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-dia-semana:hover,
    .project-footer .project-loading .options-container .double-btn .project-btn-news-footer.status.btn-recorrencia-assinatura:hover,
    .project-loading .options-container .double-btn .project-footer .project-btn-news-footer.status.btn-recorrencia-assinatura:hover,
    .project-footer .options-container .double-btn .project-loading .project-btn-news-footer.status.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-loading .project-footer .project-btn-news-footer.status.btn-recorrencia-assinatura:hover, .project-footer .project-loading .project-btn-news-footer.status.btn-model-5:hover, .project-loading .project-footer .project-btn-news-footer.status.btn-model-5:hover, .project-footer .project-loading .project-btn-news-footer.status.btn-model-6:hover, .project-loading .project-footer .project-btn-news-footer.status.btn-model-6:hover, .project-footer .project-loading .project-btn-news-footer.status.btn-model-8:hover, .project-loading .project-footer .project-btn-news-footer.status.btn-model-8:hover, .project-footer .project-loading .project-btn-news-footer.status.btn-model-9:hover, .project-loading .project-footer .project-btn-news-footer.status.btn-model-9:hover, .project-footer .project-loading .project-btn-news-footer.status.btn-model-10:hover, .project-loading .project-footer .project-btn-news-footer.status.btn-model-10:hover, .project-footer .project-loading .project-btn-news-footer.status.project-adicionar-cesta:hover, .project-loading .project-footer .project-btn-news-footer.status.project-adicionar-cesta:hover, .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-left:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left.project-alerts:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left.project-alerts:hover,
    .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-right:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-right.project-alerts:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-right.project-alerts:hover, .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-periodos:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos.project-alerts:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos.project-alerts:hover,
    .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana.project-alerts:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana.project-alerts:hover,
    .project-footer .options-container .double-btn .project-btn-highlight.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-highlight.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura.project-alerts:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura.project-alerts:hover, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-news-footer.btn-model-5.project-alerts:hover, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-news-footer.btn-model-6.project-alerts:hover, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-news-footer.btn-model-8.project-alerts:hover, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-news-footer.btn-model-9.project-alerts:hover, .project-footer .project-btn-highlight.project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-news-footer.btn-model-10.project-alerts:hover, .project-footer .project-hover.project-btn-news-footer.project-alerts:hover, .project-footer .project-btn-news-footer.project-alerts.project-adicionar-cesta:hover, .project-footer .project-btn-highlight.project-btn-news-footer.project-adicionar-cesta:hover, .project-loading .project-btn-dark.project-hover.status:hover, .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-left:hover,
    .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-right:hover, .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-periodos:hover,
    .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-dia-semana:hover,
    .project-loading .project-footer .options-container .double-btn .status.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-loading .status.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-loading .options-container .double-btn .project-btn-dark.status.btn-left:hover, .options-container .double-btn .project-loading .project-btn-dark.status.btn-left:hover,
    .project-loading .options-container .double-btn .project-btn-dark.status.btn-right:hover,
    .options-container .double-btn .project-loading .project-btn-dark.status.btn-right:hover, .project-loading .options-container .double-btn .project-btn-dark.status.btn-periodos:hover, .options-container .double-btn .project-loading .project-btn-dark.status.btn-periodos:hover,
    .project-loading .options-container .double-btn .project-btn-dark.status.btn-dia-semana:hover,
    .options-container .double-btn .project-loading .project-btn-dark.status.btn-dia-semana:hover,
    .project-loading .options-container .double-btn .project-btn-dark.status.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-loading .project-btn-dark.status.btn-recorrencia-assinatura:hover, .project-loading .project-btn-dark.status.btn-model-5:hover, .project-loading .project-btn-dark.status.btn-model-6:hover, .project-loading .project-btn-dark.status.btn-model-8:hover, .project-loading .project-btn-dark.status.btn-model-9:hover, .project-loading .project-btn-dark.status.btn-model-10:hover, .project-loading .project-btn-dark.status.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-left:hover, .options-container .double-btn .project-btn-dark.btn-left.project-alerts:hover,
    .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-right:hover,
    .options-container .double-btn .project-btn-dark.btn-right.project-alerts:hover, .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-periodos:hover, .options-container .double-btn .project-btn-dark.btn-periodos.project-alerts:hover,
    .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.btn-dia-semana.project-alerts:hover,
    .options-container .double-btn .project-btn-dark.project-btn-highlight.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura.project-alerts:hover, .project-btn-dark.project-btn-highlight.btn-model-5:hover, .project-btn-dark.btn-model-5.project-alerts:hover, .project-btn-dark.project-btn-highlight.btn-model-6:hover, .project-btn-dark.btn-model-6.project-alerts:hover, .project-btn-dark.project-btn-highlight.btn-model-8:hover, .project-btn-dark.btn-model-8.project-alerts:hover, .project-btn-dark.project-btn-highlight.btn-model-9:hover, .project-btn-dark.btn-model-9.project-alerts:hover, .project-btn-dark.project-btn-highlight.btn-model-10:hover, .project-btn-dark.btn-model-10.project-alerts:hover, .project-btn-dark.project-hover.project-alerts:hover, .project-btn-dark.project-alerts.project-adicionar-cesta:hover, .project-btn-dark.project-btn-highlight.project-adicionar-cesta:hover, .project-btn-dark.project-hover.project-btn-translucid:hover, .project-footer .project-hover.project-btn-translucid.project-btn-news-footer:hover, .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-translucid.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-translucid.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-translucid.project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-translucid.project-btn-news-footer.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-left:hover,
    .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-right:hover, .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-periodos:hover,
    .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.project-btn-translucid.btn-recorrencia-assinatura:hover, .project-btn-dark.project-btn-translucid.btn-model-5:hover, .project-btn-dark.project-btn-translucid.btn-model-6:hover, .project-btn-dark.project-btn-translucid.btn-model-8:hover, .project-btn-dark.project-btn-translucid.btn-model-9:hover, .project-btn-dark.project-btn-translucid.btn-model-10:hover, .project-btn-dark.project-btn-translucid.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.btn-left:hover,
    .options-container .double-btn .project-btn-dark.btn-right:hover, .options-container .double-btn .project-btn-dark.btn-periodos:hover,
    .options-container .double-btn .project-btn-dark.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura:hover, .project-footer .btn-model-7.project-btn-news-footer.btn-model-6:hover, .project-btn-dark.btn-model-7.btn-model-6:hover, .project-btn-dark.btn-model-8:hover, .project-btn-dark.btn-model-9:hover, .project-btn-dark.btn-model-10:hover, .gs-hover.project-btn-shaddow:hover, .project-btn-shaddow.project-btn.project-hover:hover, .project-btn.btn-model-5:hover, .btn-model-6.btn-model-5:hover, .btn-model-8.btn-model-5:hover, .btn-model-9.btn-model-5:hover, .btn-model-10.btn-model-5:hover, .project-adicionar-cesta.btn-model-5:hover, .gs-hover.btn-model-5:hover, .gs-hover.project-btn-tabs:hover, .project-btn-tabs.project-btn.project-hover:hover, .project-btn-tabs.project-btn.btn-model-5:hover, .gs-hover.btn-model-7:hover, .gs-hover.project-btn-filters:hover, .project-btn-filters.project-btn.project-hover:hover, .project-btn-filters.project-btn.btn-model-5:hover, .gs-hover.project-btn-highlight:hover, .project-btn-highlight.project-btn.project-hover:hover, .project-loading .project-btn.project-hover.status:hover, .project-loading .project-btn.status.btn-model-5:hover, .project-btn-highlight.project-btn.btn-model-5:hover, .project-btn.btn-model-5.project-alerts:hover, .project-btn.project-hover.project-alerts:hover, .project-loading .gs-hover.status:hover, .gs-hover.project-alerts:hover, .gs-hover.project-btn-translucid:hover, .project-btn-translucid.project-btn.project-hover:hover, .project-btn-translucid.project-btn.btn-model-5:hover, .btn-model-7.project-btn.project-hover:hover, .btn-model-7.project-btn.btn-model-5:hover, .options-container .double-btn .btn-model-8.btn-left:hover,
    .options-container .double-btn .btn-model-8.btn-right:hover, .options-container .double-btn .btn-model-8.btn-periodos:hover,
    .options-container .double-btn .btn-model-8.btn-dia-semana:hover,
    .options-container .double-btn .btn-model-8.btn-recorrencia-assinatura:hover, .options-container .double-btn .btn-model-9.btn-left:hover,
    .options-container .double-btn .btn-model-9.btn-right:hover, .options-container .double-btn .btn-model-9.btn-periodos:hover,
    .options-container .double-btn .btn-model-9.btn-dia-semana:hover,
    .options-container .double-btn .btn-model-9.btn-recorrencia-assinatura:hover, .options-container .double-btn .btn-model-10.btn-left:hover,
    .options-container .double-btn .btn-model-10.btn-right:hover, .options-container .double-btn .btn-model-10.btn-periodos:hover,
    .options-container .double-btn .btn-model-10.btn-dia-semana:hover,
    .options-container .double-btn .btn-model-10.btn-recorrencia-assinatura:hover, .gs-btn.project-btn.project-hover:hover, .gs-btn.project-hover.project-btn-big:hover, .gs-btn.project-btn-big.btn-model-5:hover, .gs-btn.project-hover.project-btn-shaddow:hover, .options-container .double-btn .gs-btn.project-btn-shaddow.btn-left:hover, .options-container .double-btn .project-btn-shaddow.btn-left.project-btn:hover, .options-container .double-btn .btn-left.project-btn.btn-model-5:hover, .options-container .double-btn .project-footer .btn-left.project-btn-news-footer.btn-model-5:hover, .project-footer .options-container .double-btn .btn-left.project-btn-news-footer.btn-model-5:hover, .options-container .double-btn .btn-left.project-btn-dark.btn-model-5:hover, .options-container .double-btn .gs-btn.btn-left.btn-model-5:hover,
    .options-container .double-btn .gs-btn.project-btn-shaddow.btn-right:hover,
    .options-container .double-btn .project-btn-shaddow.btn-right.project-btn:hover,
    .options-container .double-btn .btn-right.project-btn.btn-model-5:hover,
    .options-container .double-btn .project-footer .btn-right.project-btn-news-footer.btn-model-5:hover,
    .project-footer .options-container .double-btn .btn-right.project-btn-news-footer.btn-model-5:hover,
    .options-container .double-btn .btn-right.project-btn-dark.btn-model-5:hover,
    .options-container .double-btn .gs-btn.btn-right.btn-model-5:hover, .options-container .double-btn .gs-btn.project-btn-shaddow.btn-periodos:hover, .options-container .double-btn .project-btn-shaddow.btn-periodos.project-btn:hover, .options-container .double-btn .btn-periodos.project-btn.btn-model-5:hover, .options-container .double-btn .project-footer .btn-periodos.project-btn-news-footer.btn-model-5:hover, .project-footer .options-container .double-btn .btn-periodos.project-btn-news-footer.btn-model-5:hover, .options-container .double-btn .btn-periodos.project-btn-dark.btn-model-5:hover, .options-container .double-btn .gs-btn.btn-periodos.btn-model-5:hover,
    .options-container .double-btn .gs-btn.project-btn-shaddow.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-shaddow.btn-dia-semana.project-btn:hover,
    .options-container .double-btn .btn-dia-semana.project-btn.btn-model-5:hover,
    .options-container .double-btn .project-footer .btn-dia-semana.project-btn-news-footer.btn-model-5:hover,
    .project-footer .options-container .double-btn .btn-dia-semana.project-btn-news-footer.btn-model-5:hover,
    .options-container .double-btn .btn-dia-semana.project-btn-dark.btn-model-5:hover,
    .options-container .double-btn .gs-btn.btn-dia-semana.btn-model-5:hover,
    .options-container .double-btn .gs-btn.project-btn-shaddow.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-btn-shaddow.btn-recorrencia-assinatura.project-btn:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.project-btn.btn-model-5:hover,
    .options-container .double-btn .project-footer .btn-recorrencia-assinatura.project-btn-news-footer.btn-model-5:hover,
    .project-footer .options-container .double-btn .btn-recorrencia-assinatura.project-btn-news-footer.btn-model-5:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.project-btn-dark.btn-model-5:hover,
    .options-container .double-btn .gs-btn.btn-recorrencia-assinatura.btn-model-5:hover, .gs-btn.btn-model-5:hover, .gs-btn.project-btn-shaddow.btn-model-6:hover, .project-btn-shaddow.btn-model-6.project-btn:hover, .btn-model-6.project-btn.btn-model-5:hover, .project-footer .btn-model-6.project-btn-news-footer.btn-model-5:hover, .btn-model-6.project-btn-dark.btn-model-5:hover, .gs-btn.btn-model-6.btn-model-5:hover, .gs-btn.project-btn-shaddow.btn-model-8:hover, .project-btn-shaddow.btn-model-8.project-btn:hover, .btn-model-8.project-btn.btn-model-5:hover, .project-footer .btn-model-8.project-btn-news-footer.btn-model-5:hover, .btn-model-8.project-btn-dark.btn-model-5:hover, .gs-btn.btn-model-8.btn-model-5:hover, .gs-btn.project-btn-shaddow.btn-model-9:hover, .project-btn-shaddow.btn-model-9.project-btn:hover, .btn-model-9.project-btn.btn-model-5:hover, .project-footer .btn-model-9.project-btn-news-footer.btn-model-5:hover, .btn-model-9.project-btn-dark.btn-model-5:hover, .gs-btn.btn-model-9.btn-model-5:hover, .gs-btn.project-btn-shaddow.btn-model-10:hover, .project-btn-shaddow.btn-model-10.project-btn:hover, .btn-model-10.project-btn.btn-model-5:hover, .project-footer .btn-model-10.project-btn-news-footer.btn-model-5:hover, .btn-model-10.project-btn-dark.btn-model-5:hover, .gs-btn.btn-model-10.btn-model-5:hover, .gs-btn.project-btn-shaddow.project-adicionar-cesta:hover, .project-btn-shaddow.project-adicionar-cesta.project-btn:hover, .project-adicionar-cesta.project-btn.btn-model-5:hover, .project-footer .project-adicionar-cesta.project-btn-news-footer.btn-model-5:hover, .project-adicionar-cesta.project-btn-dark.btn-model-5:hover, .gs-btn.project-adicionar-cesta.btn-model-5:hover, .gs-btn.project-hover.project-btn-tabs:hover, .options-container .double-btn .gs-btn.project-btn-tabs.btn-left:hover, .options-container .double-btn .project-btn-tabs.btn-left.project-btn:hover,
    .options-container .double-btn .gs-btn.project-btn-tabs.btn-right:hover,
    .options-container .double-btn .project-btn-tabs.btn-right.project-btn:hover, .options-container .double-btn .gs-btn.project-btn-tabs.btn-periodos:hover, .options-container .double-btn .project-btn-tabs.btn-periodos.project-btn:hover,
    .options-container .double-btn .gs-btn.project-btn-tabs.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-tabs.btn-dia-semana.project-btn:hover,
    .options-container .double-btn .gs-btn.project-btn-tabs.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura.project-btn:hover, .gs-btn.project-btn-tabs.btn-model-5:hover, .gs-btn.btn-model-6:hover, .btn-model-6.project-btn:hover, .gs-btn.project-hover.btn-model-7:hover, .gs-btn.btn-model-7.btn-model-5:hover, .gs-btn.project-btn-tabs.btn-model-8:hover, .project-btn-tabs.btn-model-8.project-btn:hover, .btn-model-8.btn-model-6:hover, .gs-btn.project-btn-tabs.btn-model-9:hover, .project-btn-tabs.btn-model-9.project-btn:hover, .btn-model-9.btn-model-6:hover, .gs-btn.project-btn-tabs.btn-model-10:hover, .project-btn-tabs.btn-model-10.project-btn:hover, .btn-model-10.btn-model-6:hover, .gs-btn.project-btn-tabs.project-adicionar-cesta:hover, .project-btn-tabs.project-adicionar-cesta.project-btn:hover, .project-adicionar-cesta.btn-model-6:hover, .gs-btn.project-hover.project-btn-filters:hover, .gs-btn.project-btn-filters.btn-model-5:hover, .gs-btn.project-hover.project-btn-highlight:hover, .project-loading .gs-btn.project-hover.status:hover, .project-loading .gs-btn.status.btn-model-5:hover, .options-container .double-btn .gs-btn.project-btn-highlight.btn-left:hover, .options-container .double-btn .project-btn-highlight.btn-left.project-btn:hover, .options-container .double-btn .project-loading .btn-left.project-btn.status:hover, .project-loading .options-container .double-btn .btn-left.project-btn.status:hover, .options-container .double-btn .btn-left.project-btn.project-alerts:hover, .options-container .double-btn .project-loading .gs-btn.btn-left.status:hover, .project-loading .options-container .double-btn .gs-btn.btn-left.status:hover, .options-container .double-btn .gs-btn.btn-left.project-alerts:hover,
    .options-container .double-btn .gs-btn.project-btn-highlight.btn-right:hover,
    .options-container .double-btn .project-btn-highlight.btn-right.project-btn:hover,
    .options-container .double-btn .project-loading .btn-right.project-btn.status:hover,
    .project-loading .options-container .double-btn .btn-right.project-btn.status:hover,
    .options-container .double-btn .btn-right.project-btn.project-alerts:hover,
    .options-container .double-btn .project-loading .gs-btn.btn-right.status:hover,
    .project-loading .options-container .double-btn .gs-btn.btn-right.status:hover,
    .options-container .double-btn .gs-btn.btn-right.project-alerts:hover, .options-container .double-btn .gs-btn.project-btn-highlight.btn-periodos:hover, .options-container .double-btn .project-btn-highlight.btn-periodos.project-btn:hover, .options-container .double-btn .project-loading .btn-periodos.project-btn.status:hover, .project-loading .options-container .double-btn .btn-periodos.project-btn.status:hover, .options-container .double-btn .btn-periodos.project-btn.project-alerts:hover, .options-container .double-btn .project-loading .gs-btn.btn-periodos.status:hover, .project-loading .options-container .double-btn .gs-btn.btn-periodos.status:hover, .options-container .double-btn .gs-btn.btn-periodos.project-alerts:hover,
    .options-container .double-btn .gs-btn.project-btn-highlight.btn-dia-semana:hover,
    .options-container .double-btn .project-btn-highlight.btn-dia-semana.project-btn:hover,
    .options-container .double-btn .project-loading .btn-dia-semana.project-btn.status:hover,
    .project-loading .options-container .double-btn .btn-dia-semana.project-btn.status:hover,
    .options-container .double-btn .btn-dia-semana.project-btn.project-alerts:hover,
    .options-container .double-btn .project-loading .gs-btn.btn-dia-semana.status:hover,
    .project-loading .options-container .double-btn .gs-btn.btn-dia-semana.status:hover,
    .options-container .double-btn .gs-btn.btn-dia-semana.project-alerts:hover,
    .options-container .double-btn .gs-btn.project-btn-highlight.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-btn-highlight.btn-recorrencia-assinatura.project-btn:hover,
    .options-container .double-btn .project-loading .btn-recorrencia-assinatura.project-btn.status:hover,
    .project-loading .options-container .double-btn .btn-recorrencia-assinatura.project-btn.status:hover,
    .options-container .double-btn .btn-recorrencia-assinatura.project-btn.project-alerts:hover,
    .options-container .double-btn .project-loading .gs-btn.btn-recorrencia-assinatura.status:hover,
    .project-loading .options-container .double-btn .gs-btn.btn-recorrencia-assinatura.status:hover,
    .options-container .double-btn .gs-btn.btn-recorrencia-assinatura.project-alerts:hover, .gs-btn.project-btn-highlight.btn-model-5:hover, .gs-btn.btn-model-5.project-alerts:hover, .gs-btn.project-btn-highlight.btn-model-6:hover, .project-btn-highlight.btn-model-6.project-btn:hover, .project-loading .btn-model-6.project-btn.status:hover, .btn-model-6.project-btn.project-alerts:hover, .project-loading .gs-btn.btn-model-6.status:hover, .gs-btn.btn-model-6.project-alerts:hover, .gs-btn.project-btn-highlight.btn-model-8:hover, .project-btn-highlight.btn-model-8.project-btn:hover, .project-loading .btn-model-8.project-btn.status:hover, .btn-model-8.project-btn.project-alerts:hover, .project-loading .gs-btn.btn-model-8.status:hover, .gs-btn.btn-model-8.project-alerts:hover, .gs-btn.project-btn-highlight.btn-model-9:hover, .project-btn-highlight.btn-model-9.project-btn:hover, .project-loading .btn-model-9.project-btn.status:hover, .btn-model-9.project-btn.project-alerts:hover, .project-loading .gs-btn.btn-model-9.status:hover, .gs-btn.btn-model-9.project-alerts:hover, .gs-btn.project-btn-highlight.btn-model-10:hover, .project-btn-highlight.btn-model-10.project-btn:hover, .project-loading .btn-model-10.project-btn.status:hover, .btn-model-10.project-btn.project-alerts:hover, .project-loading .gs-btn.btn-model-10.status:hover, .gs-btn.btn-model-10.project-alerts:hover, .gs-btn.project-hover.project-alerts:hover, .gs-btn.project-btn-highlight.project-adicionar-cesta:hover, .project-btn-highlight.project-adicionar-cesta.project-btn:hover, .project-loading .project-adicionar-cesta.project-btn.status:hover, .project-adicionar-cesta.project-btn.project-alerts:hover, .project-loading .gs-btn.project-adicionar-cesta.status:hover, .gs-btn.project-adicionar-cesta.project-alerts:hover, .gs-btn.project-hover.project-btn-translucid:hover, .gs-btn.project-btn-translucid.btn-model-5:hover, .gs-hover.project-btn-dark:hover, .project-footer .project-btn-news-footer.project-btn.project-hover:hover, .project-footer .project-btn-news-footer.project-btn-dark.project-hover:hover, .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-left:hover, .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-left:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-right:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-right:hover, .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-periodos:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-dia-semana:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-dia-semana:hover,
    .project-footer .options-container .double-btn .project-btn-news-footer.project-btn-dark.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer .project-btn-news-footer.project-btn-dark.btn-recorrencia-assinatura:hover, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-5:hover, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-6:hover, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-8:hover, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-9:hover, .project-footer .project-btn-news-footer.project-btn-dark.btn-model-10:hover, .project-footer .project-btn-news-footer.project-btn-dark.project-adicionar-cesta:hover, .project-btn-dark.project-hover:hover, .gs-btn.project-btn-dark.project-hover:hover, .project-footer .gs-btn.project-hover.project-btn-news-footer:hover {
      background: #ddd; }
  .gs-btn.gs-btn-big, .gs-btn-big.project-btn, .project-footer .gs-btn-big.project-btn-news-footer, .project-footer .project-btn-news-footer.project-btn-big, .project-footer .project-btn-news-footer.project-adicionar-cesta, .project-btn-big, .project-adicionar-cesta, .gs-btn-big.project-btn-shaddow, .gs-btn-big.btn-model-5, .gs-btn-big.project-btn-tabs, .gs-btn-big.btn-model-6, .gs-btn-big.btn-model-7, .gs-btn-big.project-btn-filters, .gs-btn-big.project-btn-highlight, .project-loading .project-btn-big.status, .project-loading .status.project-adicionar-cesta, .project-loading .gs-btn-big.status, .gs-btn-big.project-alerts, .gs-btn-big.project-btn-translucid, .options-container .double-btn .gs-btn-big.btn-left, .options-container .double-btn .btn-left.project-btn-big, .options-container .double-btn .btn-left.project-adicionar-cesta,
  .options-container .double-btn .gs-btn-big.btn-right,
  .options-container .double-btn .btn-right.project-btn-big,
  .options-container .double-btn .btn-right.project-adicionar-cesta, .options-container .double-btn .gs-btn-big.btn-periodos, .options-container .double-btn .btn-periodos.project-btn-big, .options-container .double-btn .btn-periodos.project-adicionar-cesta,
  .options-container .double-btn .gs-btn-big.btn-dia-semana,
  .options-container .double-btn .btn-dia-semana.project-btn-big,
  .options-container .double-btn .btn-dia-semana.project-adicionar-cesta,
  .options-container .double-btn .gs-btn-big.btn-recorrencia-assinatura,
  .options-container .double-btn .btn-recorrencia-assinatura.project-btn-big,
  .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta, .gs-btn-big.btn-model-8, .gs-btn-big.btn-model-9, .gs-btn-big.btn-model-10, .gs-btn-big.project-btn-dark {
    padding: 17px; }
  .gs-btn.gs-btn-maximum, .gs-btn-maximum.project-btn, .project-footer .gs-btn-maximum.project-btn-news-footer, .gs-btn-maximum.project-btn-big, .gs-btn-maximum.project-adicionar-cesta, .gs-btn-maximum.project-btn-shaddow, .gs-btn-maximum.btn-model-5, .gs-btn-maximum.project-btn-tabs, .gs-btn-maximum.btn-model-6, .gs-btn-maximum.btn-model-7, .gs-btn-maximum.project-btn-filters, .gs-btn-maximum.project-btn-highlight, .project-loading .gs-btn-maximum.status, .gs-btn-maximum.project-alerts, .gs-btn-maximum.project-btn-translucid, .options-container .double-btn .gs-btn-maximum.btn-left,
  .options-container .double-btn .gs-btn-maximum.btn-right, .options-container .double-btn .gs-btn-maximum.btn-periodos,
  .options-container .double-btn .gs-btn-maximum.btn-dia-semana,
  .options-container .double-btn .gs-btn-maximum.btn-recorrencia-assinatura, .gs-btn-maximum.btn-model-8, .gs-btn-maximum.btn-model-9, .gs-btn-maximum.btn-model-10, .gs-btn-maximum.project-btn-dark {
    padding: 25px; }
  .gs-btn.gs-icon-left img, .gs-icon-left.project-btn img, .project-footer .gs-icon-left.project-btn-news-footer img, .gs-icon-left.project-btn-big img, .gs-icon-left.project-adicionar-cesta img, .gs-icon-left.project-btn-shaddow img, .gs-icon-left.btn-model-5 img, .gs-icon-left.project-btn-tabs img, .gs-icon-left.btn-model-6 img, .gs-icon-left.btn-model-7 img, .gs-icon-left.project-btn-filters img, .gs-icon-left.project-btn-highlight img, .project-loading .gs-icon-left.status img, .gs-icon-left.project-alerts img, .gs-icon-left.project-btn-translucid img, .options-container .double-btn .gs-icon-left.btn-left img,
  .options-container .double-btn .gs-icon-left.btn-right img, .options-container .double-btn .gs-icon-left.btn-periodos img,
  .options-container .double-btn .gs-icon-left.btn-dia-semana img,
  .options-container .double-btn .gs-icon-left.btn-recorrencia-assinatura img, .gs-icon-left.btn-model-8 img, .gs-icon-left.btn-model-9 img, .gs-icon-left.btn-model-10 img, .gs-icon-left.project-btn-dark img {
    float: left;
    margin-right: 10px;
    max-height: 100%; }
  .gs-btn.gs-icon-right img, .gs-icon-right.project-btn img, .project-footer .gs-icon-right.project-btn-news-footer img, .gs-icon-right.project-btn-big img, .gs-icon-right.project-adicionar-cesta img, .gs-icon-right.project-btn-shaddow img, .gs-icon-right.btn-model-5 img, .gs-icon-right.project-btn-tabs img, .gs-icon-right.btn-model-6 img, .gs-icon-right.btn-model-7 img, .gs-icon-right.project-btn-filters img, .gs-icon-right.project-btn-highlight img, .project-loading .gs-icon-right.status img, .gs-icon-right.project-alerts img, .gs-icon-right.project-btn-translucid img, .options-container .double-btn .gs-icon-right.btn-left img,
  .options-container .double-btn .gs-icon-right.btn-right img, .options-container .double-btn .gs-icon-right.btn-periodos img,
  .options-container .double-btn .gs-icon-right.btn-dia-semana img,
  .options-container .double-btn .gs-icon-right.btn-recorrencia-assinatura img, .gs-icon-right.btn-model-8 img, .gs-icon-right.btn-model-9 img, .gs-icon-right.btn-model-10 img, .gs-icon-right.project-btn-dark img {
    float: right;
    margin-left: 10px;
    max-height: 100%; }

/**
  * Efeitos visuais
*/
.gs-light-shaddow, .project-search-box {
  box-shadow: 0px 4px 25px -6px #696969; }

.gs-light-shaddow-top {
  box-shadow: 0 -4px 15px -6px #696969; }

.gs-light-shaddow-bottom, .project-btn-shaddow, .btn-model-5 {
  box-shadow: 0 4px 15px -6px #696969; }

.gs-dark-shaddow {
  box-shadow: 0px 4px 25px -6px #000; }

.gs-dark-shaddow-bottom {
  box-shadow: 0 3px 10px -1px #000; }

/**
  * Fim Petropolis
*/
/* Mobile */
@media only screen and (max-width: 550px) {
  [data-gs-display='desktop'] {
    display: none; }

  [data-gs-display='tablet'] {
    display: none; }

  [data-gs-display='mobile'] {
    display: block; }

  /*	
    .gs-coluna-1,
    .gs-coluna-2,
    .gs-coluna-3,
    .gs-coluna-4,
    .gs-coluna-5,
    .gs-coluna-6,
    .gs-coluna-7,
    .gs-coluna-8,
    .gs-coluna-9,
    .gs-coluna-10,
    .gs-coluna-11,
    .gs-coluna-12 {
      width: auto;
      float: none;
    }*/ }
/* Tabelas */
.gs-table, .project-header .project-hicon-left,
.project-header .project-hicon-center,
.project-header .project-hicon-right, .project-floating-bubble {
  display: table;
  height: 100%;
  width: 100%; }

.gs-cell, .project-header .project-hicon-left div,
.project-header .project-hicon-center div,
.project-header .project-hicon-right div {
  display: table-cell; }

.gs-row {
  display: table-row; }

.gs-top {
  vertical-align: top; }

.gs-middle, .project-header .project-hicon-left div,
.project-header .project-hicon-center div,
.project-header .project-hicon-right div {
  vertical-align: middle; }

.gs-bottom {
  vertical-align: bottom; }

/* Alinhamentos */
.gs-left, .project-data-list article th, .project-institucional .project-content .project-visao-itens {
  text-align: left; }

.gs-center, .gs-product-grid .gs-pg-container .gs-pg-summary, .project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
.options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
.options-container .double-btn .btn-dia-semana,
.options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10, .project-floating-bubble, .options-container .header {
  text-align: center; }

.gs-right {
  text-align: right; }

/* Layout */
.gs-clear {
  clear: both; }

.gs-extra-line-spacing:before {
  content: "";
  display: block;
  height: 28px; }

/* Formulários */
.gs-placeholder-forms {
  padding: 7px; }
  .gs-placeholder-forms input,
  .gs-placeholder-forms textarea {
    background-color: transparent;
    width: 100%;
    border: none;
    color: #000;
    margin: 0;
    padding: 0;
    outline: none;
    font-size: inherit; }

/* Displays (show/hide) */
[data-gs-display='hidden'] {
  display: none; }

[data-gs-display='block'] {
  display: block; }

/** Cores do Site
  * Importa o arquivo somente com as cores da página
  * O import precisa estar no topo do documento
*/
/* Key Visual Petropolis Paulista */
/* Categorias */
/**
  * Variacoes de cor
*/
/**
  * Elementos padrão





*/
h1, h2, h3, h4, h5, h6 {
  color: #071543; }

/**
  * Home Page Banner





*/
.project-home-banner .project-hb-text {
  color: rgba(7, 21, 67, 0.9); }

.project-nossa-historia-banner .project-hb-text {
  color: #071543; }

/**
  * Header / Footer





*/
.project-footer p, .project-footer a {
  color: #3E3E3E; }
.project-footer .project-overlayer {
  background-color: #fff;
  color: #3E3E3E; }

.project-header-user .project-perfil {
  border-color: #fff; }
.project-header-user .project-btn-filters {
  color: #071543;
  border-color: #071543; }

/**
  * Botoes




*/
.project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
.options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
.options-container .double-btn .btn-dia-semana,
.options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10 {
  background-color: #fff;
  color: #071543;
  text-decoration: none; }
  .project-btn.project-hover:hover, .project-footer .project-hover.project-btn-news-footer:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left:hover,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right:hover,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos:hover,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana:hover,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana:hover,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-news-footer.project-adicionar-cesta:hover, .project-hover.project-btn-big:hover, .options-container .double-btn .project-btn-big.btn-left:hover, .options-container .double-btn .btn-left.project-adicionar-cesta:hover,
  .options-container .double-btn .project-btn-big.btn-right:hover,
  .options-container .double-btn .btn-right.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-big.btn-periodos:hover, .options-container .double-btn .btn-periodos.project-adicionar-cesta:hover,
  .options-container .double-btn .project-btn-big.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.project-adicionar-cesta:hover,
  .options-container .double-btn .project-btn-big.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta:hover, .project-btn-big.btn-model-5:hover, .project-btn-big.btn-model-6:hover, .project-btn-big.btn-model-8:hover, .project-btn-big.btn-model-9:hover, .project-btn-big.btn-model-10:hover, .project-adicionar-cesta:hover, .project-hover.project-btn-shaddow:hover, .options-container .double-btn .project-btn-shaddow.btn-left:hover, .options-container .double-btn .btn-left.btn-model-5:hover,
  .options-container .double-btn .project-btn-shaddow.btn-right:hover,
  .options-container .double-btn .btn-right.btn-model-5:hover, .options-container .double-btn .project-btn-shaddow.btn-periodos:hover, .options-container .double-btn .btn-periodos.btn-model-5:hover,
  .options-container .double-btn .project-btn-shaddow.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.btn-model-5:hover,
  .options-container .double-btn .project-btn-shaddow.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-5:hover, .btn-model-5:hover, .project-btn-shaddow.btn-model-6:hover, .project-btn-shaddow.btn-model-8:hover, .project-btn-shaddow.btn-model-9:hover, .project-btn-shaddow.btn-model-10:hover, .project-btn-shaddow.project-adicionar-cesta:hover, .project-hover.project-btn-tabs:hover, .options-container .double-btn .project-btn-tabs.btn-left:hover, .options-container .double-btn .btn-left.btn-model-6:hover, .options-container .double-btn .btn-left.btn-model-7:hover,
  .options-container .double-btn .project-btn-tabs.btn-right:hover,
  .options-container .double-btn .btn-right.btn-model-6:hover,
  .options-container .double-btn .btn-right.btn-model-7:hover, .options-container .double-btn .project-btn-tabs.btn-periodos:hover, .options-container .double-btn .btn-periodos.btn-model-6:hover, .options-container .double-btn .btn-periodos.btn-model-7:hover,
  .options-container .double-btn .project-btn-tabs.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.btn-model-6:hover,
  .options-container .double-btn .btn-dia-semana.btn-model-7:hover,
  .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-6:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7:hover, .project-btn-tabs.btn-model-5:hover, .btn-model-5.btn-model-7:hover, .btn-model-6:hover, .project-hover.btn-model-7:hover, .btn-model-7.btn-model-8:hover, .btn-model-7.btn-model-9:hover, .btn-model-7.btn-model-10:hover, .btn-model-7.project-adicionar-cesta:hover, .project-btn-tabs.btn-model-8:hover, .project-btn-tabs.btn-model-9:hover, .project-btn-tabs.btn-model-10:hover, .project-btn-tabs.project-adicionar-cesta:hover, .project-hover.project-btn-filters:hover, .options-container .double-btn .project-btn-filters.btn-left:hover,
  .options-container .double-btn .project-btn-filters.btn-right:hover, .options-container .double-btn .project-btn-filters.btn-periodos:hover,
  .options-container .double-btn .project-btn-filters.btn-dia-semana:hover,
  .options-container .double-btn .project-btn-filters.btn-recorrencia-assinatura:hover, .project-btn-filters.btn-model-5:hover, .project-btn-filters.btn-model-6:hover, .project-btn-filters.btn-model-8:hover, .project-btn-filters.btn-model-9:hover, .project-btn-filters.btn-model-10:hover, .project-btn-filters.project-adicionar-cesta:hover, .project-hover.project-btn-highlight:hover, .project-loading .project-hover.status:hover, .project-loading .options-container .double-btn .status.btn-left:hover, .options-container .double-btn .project-loading .status.btn-left:hover,
  .project-loading .options-container .double-btn .status.btn-right:hover,
  .options-container .double-btn .project-loading .status.btn-right:hover, .project-loading .options-container .double-btn .status.btn-periodos:hover, .options-container .double-btn .project-loading .status.btn-periodos:hover,
  .project-loading .options-container .double-btn .status.btn-dia-semana:hover,
  .options-container .double-btn .project-loading .status.btn-dia-semana:hover,
  .project-loading .options-container .double-btn .status.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .project-loading .status.btn-recorrencia-assinatura:hover, .project-loading .status.btn-model-5:hover, .project-loading .status.btn-model-6:hover, .project-loading .status.btn-model-8:hover, .project-loading .status.btn-model-9:hover, .project-loading .status.btn-model-10:hover, .project-loading .status.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-highlight.btn-left:hover, .options-container .double-btn .btn-left.project-alerts:hover,
  .options-container .double-btn .project-btn-highlight.btn-right:hover,
  .options-container .double-btn .btn-right.project-alerts:hover, .options-container .double-btn .project-btn-highlight.btn-periodos:hover, .options-container .double-btn .btn-periodos.project-alerts:hover,
  .options-container .double-btn .project-btn-highlight.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.project-alerts:hover,
  .options-container .double-btn .project-btn-highlight.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.project-alerts:hover, .project-btn-highlight.btn-model-5:hover, .btn-model-5.project-alerts:hover, .project-btn-highlight.btn-model-6:hover, .btn-model-6.project-alerts:hover, .project-btn-highlight.btn-model-8:hover, .btn-model-8.project-alerts:hover, .project-btn-highlight.btn-model-9:hover, .btn-model-9.project-alerts:hover, .project-btn-highlight.btn-model-10:hover, .btn-model-10.project-alerts:hover, .project-hover.project-alerts:hover, .project-alerts.project-adicionar-cesta:hover, .project-btn-highlight.project-adicionar-cesta:hover, .project-hover.project-btn-translucid:hover, .options-container .double-btn .project-btn-translucid.btn-left:hover,
  .options-container .double-btn .project-btn-translucid.btn-right:hover, .options-container .double-btn .project-btn-translucid.btn-periodos:hover,
  .options-container .double-btn .project-btn-translucid.btn-dia-semana:hover,
  .options-container .double-btn .project-btn-translucid.btn-recorrencia-assinatura:hover, .project-btn-translucid.btn-model-5:hover, .project-btn-translucid.btn-model-6:hover, .project-btn-translucid.btn-model-8:hover, .project-btn-translucid.btn-model-9:hover, .project-btn-translucid.btn-model-10:hover, .project-btn-translucid.project-adicionar-cesta:hover, .options-container .double-btn .btn-left:hover,
  .options-container .double-btn .btn-right:hover, .options-container .double-btn .btn-periodos:hover,
  .options-container .double-btn .btn-dia-semana:hover,
  .options-container .double-btn .btn-recorrencia-assinatura:hover, .btn-model-7.btn-model-6:hover, .btn-model-8:hover, .btn-model-9:hover, .btn-model-10:hover {
    background-color: #fff;
    color: #81C5FA; }
  .project-btn.project-hover:active, .project-footer .project-hover.project-btn-news-footer:active, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left:active, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left:active,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right:active,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right:active, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos:active, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos:active,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana:active,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana:active,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura:active,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura:active, .project-footer .project-btn-news-footer.btn-model-5:active, .project-footer .project-btn-news-footer.btn-model-6:active, .project-footer .project-btn-news-footer.btn-model-8:active, .project-footer .project-btn-news-footer.btn-model-9:active, .project-footer .project-btn-news-footer.btn-model-10:active, .project-footer .project-btn-news-footer.project-adicionar-cesta:active, .project-hover.project-btn-big:active, .options-container .double-btn .project-btn-big.btn-left:active, .options-container .double-btn .btn-left.project-adicionar-cesta:active,
  .options-container .double-btn .project-btn-big.btn-right:active,
  .options-container .double-btn .btn-right.project-adicionar-cesta:active, .options-container .double-btn .project-btn-big.btn-periodos:active, .options-container .double-btn .btn-periodos.project-adicionar-cesta:active,
  .options-container .double-btn .project-btn-big.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.project-adicionar-cesta:active,
  .options-container .double-btn .project-btn-big.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta:active, .project-btn-big.btn-model-5:active, .project-btn-big.btn-model-6:active, .project-btn-big.btn-model-8:active, .project-btn-big.btn-model-9:active, .project-btn-big.btn-model-10:active, .project-adicionar-cesta:active, .project-hover.project-btn-shaddow:active, .options-container .double-btn .project-btn-shaddow.btn-left:active, .options-container .double-btn .btn-left.btn-model-5:active,
  .options-container .double-btn .project-btn-shaddow.btn-right:active,
  .options-container .double-btn .btn-right.btn-model-5:active, .options-container .double-btn .project-btn-shaddow.btn-periodos:active, .options-container .double-btn .btn-periodos.btn-model-5:active,
  .options-container .double-btn .project-btn-shaddow.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.btn-model-5:active,
  .options-container .double-btn .project-btn-shaddow.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-5:active, .btn-model-5:active, .project-btn-shaddow.btn-model-6:active, .project-btn-shaddow.btn-model-8:active, .project-btn-shaddow.btn-model-9:active, .project-btn-shaddow.btn-model-10:active, .project-btn-shaddow.project-adicionar-cesta:active, .project-hover.project-btn-tabs:active, .options-container .double-btn .project-btn-tabs.btn-left:active, .options-container .double-btn .btn-left.btn-model-6:active, .options-container .double-btn .btn-left.btn-model-7:active,
  .options-container .double-btn .project-btn-tabs.btn-right:active,
  .options-container .double-btn .btn-right.btn-model-6:active,
  .options-container .double-btn .btn-right.btn-model-7:active, .options-container .double-btn .project-btn-tabs.btn-periodos:active, .options-container .double-btn .btn-periodos.btn-model-6:active, .options-container .double-btn .btn-periodos.btn-model-7:active,
  .options-container .double-btn .project-btn-tabs.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.btn-model-6:active,
  .options-container .double-btn .btn-dia-semana.btn-model-7:active,
  .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-6:active,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7:active, .project-btn-tabs.btn-model-5:active, .btn-model-5.btn-model-7:active, .btn-model-6:active, .project-hover.btn-model-7:active, .btn-model-7.btn-model-8:active, .btn-model-7.btn-model-9:active, .btn-model-7.btn-model-10:active, .btn-model-7.project-adicionar-cesta:active, .project-btn-tabs.btn-model-8:active, .project-btn-tabs.btn-model-9:active, .project-btn-tabs.btn-model-10:active, .project-btn-tabs.project-adicionar-cesta:active, .project-hover.project-btn-filters:active, .options-container .double-btn .project-btn-filters.btn-left:active,
  .options-container .double-btn .project-btn-filters.btn-right:active, .options-container .double-btn .project-btn-filters.btn-periodos:active,
  .options-container .double-btn .project-btn-filters.btn-dia-semana:active,
  .options-container .double-btn .project-btn-filters.btn-recorrencia-assinatura:active, .project-btn-filters.btn-model-5:active, .project-btn-filters.btn-model-6:active, .project-btn-filters.btn-model-8:active, .project-btn-filters.btn-model-9:active, .project-btn-filters.btn-model-10:active, .project-btn-filters.project-adicionar-cesta:active, .project-hover.project-btn-highlight:active, .project-loading .project-hover.status:active, .project-loading .options-container .double-btn .status.btn-left:active, .options-container .double-btn .project-loading .status.btn-left:active,
  .project-loading .options-container .double-btn .status.btn-right:active,
  .options-container .double-btn .project-loading .status.btn-right:active, .project-loading .options-container .double-btn .status.btn-periodos:active, .options-container .double-btn .project-loading .status.btn-periodos:active,
  .project-loading .options-container .double-btn .status.btn-dia-semana:active,
  .options-container .double-btn .project-loading .status.btn-dia-semana:active,
  .project-loading .options-container .double-btn .status.btn-recorrencia-assinatura:active,
  .options-container .double-btn .project-loading .status.btn-recorrencia-assinatura:active, .project-loading .status.btn-model-5:active, .project-loading .status.btn-model-6:active, .project-loading .status.btn-model-8:active, .project-loading .status.btn-model-9:active, .project-loading .status.btn-model-10:active, .project-loading .status.project-adicionar-cesta:active, .options-container .double-btn .project-btn-highlight.btn-left:active, .options-container .double-btn .btn-left.project-alerts:active,
  .options-container .double-btn .project-btn-highlight.btn-right:active,
  .options-container .double-btn .btn-right.project-alerts:active, .options-container .double-btn .project-btn-highlight.btn-periodos:active, .options-container .double-btn .btn-periodos.project-alerts:active,
  .options-container .double-btn .project-btn-highlight.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.project-alerts:active,
  .options-container .double-btn .project-btn-highlight.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.project-alerts:active, .project-btn-highlight.btn-model-5:active, .btn-model-5.project-alerts:active, .project-btn-highlight.btn-model-6:active, .btn-model-6.project-alerts:active, .project-btn-highlight.btn-model-8:active, .btn-model-8.project-alerts:active, .project-btn-highlight.btn-model-9:active, .btn-model-9.project-alerts:active, .project-btn-highlight.btn-model-10:active, .btn-model-10.project-alerts:active, .project-hover.project-alerts:active, .project-alerts.project-adicionar-cesta:active, .project-btn-highlight.project-adicionar-cesta:active, .project-hover.project-btn-translucid:active, .options-container .double-btn .project-btn-translucid.btn-left:active,
  .options-container .double-btn .project-btn-translucid.btn-right:active, .options-container .double-btn .project-btn-translucid.btn-periodos:active,
  .options-container .double-btn .project-btn-translucid.btn-dia-semana:active,
  .options-container .double-btn .project-btn-translucid.btn-recorrencia-assinatura:active, .project-btn-translucid.btn-model-5:active, .project-btn-translucid.btn-model-6:active, .project-btn-translucid.btn-model-8:active, .project-btn-translucid.btn-model-9:active, .project-btn-translucid.btn-model-10:active, .project-btn-translucid.project-adicionar-cesta:active, .options-container .double-btn .btn-left:active,
  .options-container .double-btn .btn-right:active, .options-container .double-btn .btn-periodos:active,
  .options-container .double-btn .btn-dia-semana:active,
  .options-container .double-btn .btn-recorrencia-assinatura:active, .btn-model-7.btn-model-6:active, .btn-model-8:active, .btn-model-9:active, .btn-model-10:active {
    background-color: #e6e6e6;
    color: #1f98f6; }

/* Cor de fundo */
.project-bg-success, .options-container .double-btn .btn-right, .project-adicionar-cesta {
  background-color: #61C835;
  color: #fff; }
  .project-bg-success.project-hover:hover, .options-container .double-btn .project-bg-success.btn-left:hover, .options-container .double-btn .btn-left.project-adicionar-cesta:hover,
  .options-container .double-btn .btn-right:hover, .options-container .double-btn .project-bg-success.btn-periodos:hover, .options-container .double-btn .btn-periodos.project-adicionar-cesta:hover,
  .options-container .double-btn .project-bg-success.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.project-adicionar-cesta:hover,
  .options-container .double-btn .project-bg-success.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta:hover, .project-bg-success.btn-model-5:hover, .project-bg-success.btn-model-6:hover, .project-bg-success.btn-model-8:hover, .project-bg-success.btn-model-9:hover, .project-bg-success.btn-model-10:hover, .project-adicionar-cesta:hover {
    background-color: #80d45c;
    color: #fff; }
  .project-bg-success.project-hover:active, .options-container .double-btn .project-bg-success.btn-left:active, .options-container .double-btn .btn-left.project-adicionar-cesta:active,
  .options-container .double-btn .btn-right:active, .options-container .double-btn .project-bg-success.btn-periodos:active, .options-container .double-btn .btn-periodos.project-adicionar-cesta:active,
  .options-container .double-btn .project-bg-success.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.project-adicionar-cesta:active,
  .options-container .double-btn .project-bg-success.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.project-adicionar-cesta:active, .project-bg-success.btn-model-5:active, .project-bg-success.btn-model-6:active, .project-bg-success.btn-model-8:active, .project-bg-success.btn-model-9:active, .project-bg-success.btn-model-10:active, .project-adicionar-cesta:active {
    background-color: #4da02a;
    color: #cccccc; }

.project-bg-alert {
  background-color: #F02B39;
  color: #fff; }
  .project-bg-alert.project-hover:hover, .options-container .double-btn .project-bg-alert.btn-left:hover,
  .options-container .double-btn .project-bg-alert.btn-right:hover, .options-container .double-btn .project-bg-alert.btn-periodos:hover,
  .options-container .double-btn .project-bg-alert.btn-dia-semana:hover,
  .options-container .double-btn .project-bg-alert.btn-recorrencia-assinatura:hover, .project-bg-alert.btn-model-5:hover, .project-bg-alert.btn-model-6:hover, .project-bg-alert.btn-model-8:hover, .project-bg-alert.btn-model-9:hover, .project-bg-alert.btn-model-10:hover, .project-bg-alert.project-adicionar-cesta:hover {
    background-color: #f35b65;
    color: #fff; }
  .project-bg-alert.project-hover:active, .options-container .double-btn .project-bg-alert.btn-left:active,
  .options-container .double-btn .project-bg-alert.btn-right:active, .options-container .double-btn .project-bg-alert.btn-periodos:active,
  .options-container .double-btn .project-bg-alert.btn-dia-semana:active,
  .options-container .double-btn .project-bg-alert.btn-recorrencia-assinatura:active, .project-bg-alert.btn-model-5:active, .project-bg-alert.btn-model-6:active, .project-bg-alert.btn-model-8:active, .project-bg-alert.btn-model-9:active, .project-bg-alert.btn-model-10:active, .project-bg-alert.project-adicionar-cesta:active {
    background-color: #d90f1e;
    color: #cccccc; }

.project-bg-complementar, .btn-model-5 {
  background-color: #81C5FA;
  color: #fff; }
  .project-bg-complementar.project-hover:hover, .options-container .double-btn .project-bg-complementar.btn-left:hover, .options-container .double-btn .btn-left.btn-model-5:hover,
  .options-container .double-btn .project-bg-complementar.btn-right:hover,
  .options-container .double-btn .btn-right.btn-model-5:hover, .options-container .double-btn .project-bg-complementar.btn-periodos:hover, .options-container .double-btn .btn-periodos.btn-model-5:hover,
  .options-container .double-btn .project-bg-complementar.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.btn-model-5:hover,
  .options-container .double-btn .project-bg-complementar.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-5:hover, .btn-model-5:hover, .project-bg-complementar.btn-model-6:hover, .project-bg-complementar.btn-model-8:hover, .project-bg-complementar.btn-model-9:hover, .project-bg-complementar.btn-model-10:hover, .project-bg-complementar.project-adicionar-cesta:hover {
    background-color: #b2dcfc;
    color: #fff; }
  .project-bg-complementar.project-hover:active, .options-container .double-btn .project-bg-complementar.btn-left:active, .options-container .double-btn .btn-left.btn-model-5:active,
  .options-container .double-btn .project-bg-complementar.btn-right:active,
  .options-container .double-btn .btn-right.btn-model-5:active, .options-container .double-btn .project-bg-complementar.btn-periodos:active, .options-container .double-btn .btn-periodos.btn-model-5:active,
  .options-container .double-btn .project-bg-complementar.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.btn-model-5:active,
  .options-container .double-btn .project-bg-complementar.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-5:active, .btn-model-5:active, .project-bg-complementar.btn-model-6:active, .project-bg-complementar.btn-model-8:active, .project-bg-complementar.btn-model-9:active, .project-bg-complementar.btn-model-10:active, .project-bg-complementar.project-adicionar-cesta:active {
    background-color: #81C5FA;
    color: #cccccc; }

.project-bg-white {
  background-color: #fff;
  color: #3E3E3E; }

/* Dark version */
.project-btn-dark, .project-footer .project-btn-news-footer {
  color: #fff;
  background-color: #071543; }
  .project-btn-dark.project-hover:hover, .project-footer .project-hover.project-btn-news-footer:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left:hover,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right:hover,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos:hover,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana:hover,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana:hover,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer .project-btn-news-footer.btn-model-5:hover, .project-footer .project-btn-news-footer.btn-model-6:hover, .project-footer .project-btn-news-footer.btn-model-8:hover, .project-footer .project-btn-news-footer.btn-model-9:hover, .project-footer .project-btn-news-footer.btn-model-10:hover, .project-footer .project-btn-news-footer.project-adicionar-cesta:hover, .options-container .double-btn .project-btn-dark.btn-left:hover,
  .options-container .double-btn .project-btn-dark.btn-right:hover, .options-container .double-btn .project-btn-dark.btn-periodos:hover,
  .options-container .double-btn .project-btn-dark.btn-dia-semana:hover,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura:hover, .project-btn-dark.btn-model-5:hover, .project-btn-dark.btn-model-6:hover, .project-btn-dark.btn-model-8:hover, .project-btn-dark.btn-model-9:hover, .project-btn-dark.btn-model-10:hover, .project-btn-dark.project-adicionar-cesta:hover {
    color: #81C5FA;
    background-color: #071543; }
  .project-btn-dark.project-hover:active, .project-footer .project-hover.project-btn-news-footer:active, .project-footer .options-container .double-btn .project-btn-news-footer.btn-left:active, .options-container .double-btn .project-footer .project-btn-news-footer.btn-left:active,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-right:active,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-right:active, .project-footer .options-container .double-btn .project-btn-news-footer.btn-periodos:active, .options-container .double-btn .project-footer .project-btn-news-footer.btn-periodos:active,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-dia-semana:active,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-dia-semana:active,
  .project-footer .options-container .double-btn .project-btn-news-footer.btn-recorrencia-assinatura:active,
  .options-container .double-btn .project-footer .project-btn-news-footer.btn-recorrencia-assinatura:active, .project-footer .project-btn-news-footer.btn-model-5:active, .project-footer .project-btn-news-footer.btn-model-6:active, .project-footer .project-btn-news-footer.btn-model-8:active, .project-footer .project-btn-news-footer.btn-model-9:active, .project-footer .project-btn-news-footer.btn-model-10:active, .project-footer .project-btn-news-footer.project-adicionar-cesta:active, .options-container .double-btn .project-btn-dark.btn-left:active,
  .options-container .double-btn .project-btn-dark.btn-right:active, .options-container .double-btn .project-btn-dark.btn-periodos:active,
  .options-container .double-btn .project-btn-dark.btn-dia-semana:active,
  .options-container .double-btn .project-btn-dark.btn-recorrencia-assinatura:active, .project-btn-dark.btn-model-5:active, .project-btn-dark.btn-model-6:active, .project-btn-dark.btn-model-8:active, .project-btn-dark.btn-model-9:active, .project-btn-dark.btn-model-10:active, .project-btn-dark.project-adicionar-cesta:active {
    background-color: #020715;
    color: #1f98f6; }
  .project-btn-dark.active, .project-footer .active.project-btn-news-footer {
    color: #81C5FA;
    background-color: #071543; }

/* Cor da letra */
.project-success {
  color: #61C835; }
  .project-success.project-hover:hover, .options-container .double-btn .project-success.btn-left:hover,
  .options-container .double-btn .project-success.btn-right:hover, .options-container .double-btn .project-success.btn-periodos:hover,
  .options-container .double-btn .project-success.btn-dia-semana:hover,
  .options-container .double-btn .project-success.btn-recorrencia-assinatura:hover, .project-success.btn-model-5:hover, .project-success.btn-model-6:hover, .project-success.btn-model-8:hover, .project-success.btn-model-9:hover, .project-success.btn-model-10:hover, .project-success.project-adicionar-cesta:hover {
    color: #80d45c; }
  .project-success.project-hover:active, .options-container .double-btn .project-success.btn-left:active,
  .options-container .double-btn .project-success.btn-right:active, .options-container .double-btn .project-success.btn-periodos:active,
  .options-container .double-btn .project-success.btn-dia-semana:active,
  .options-container .double-btn .project-success.btn-recorrencia-assinatura:active, .project-success.btn-model-5:active, .project-success.btn-model-6:active, .project-success.btn-model-8:active, .project-success.btn-model-9:active, .project-success.btn-model-10:active, .project-success.project-adicionar-cesta:active {
    color: #61C835; }

.project-alert {
  color: #F02B39; }
  .project-alert.project-hover:hover, .options-container .double-btn .project-alert.btn-left:hover,
  .options-container .double-btn .project-alert.btn-right:hover, .options-container .double-btn .project-alert.btn-periodos:hover,
  .options-container .double-btn .project-alert.btn-dia-semana:hover,
  .options-container .double-btn .project-alert.btn-recorrencia-assinatura:hover, .project-alert.btn-model-5:hover, .project-alert.btn-model-6:hover, .project-alert.btn-model-8:hover, .project-alert.btn-model-9:hover, .project-alert.btn-model-10:hover, .project-alert.project-adicionar-cesta:hover {
    color: #f35b65; }
  .project-alert.project-hover:active, .options-container .double-btn .project-alert.btn-left:active,
  .options-container .double-btn .project-alert.btn-right:active, .options-container .double-btn .project-alert.btn-periodos:active,
  .options-container .double-btn .project-alert.btn-dia-semana:active,
  .options-container .double-btn .project-alert.btn-recorrencia-assinatura:active, .project-alert.btn-model-5:active, .project-alert.btn-model-6:active, .project-alert.btn-model-8:active, .project-alert.btn-model-9:active, .project-alert.btn-model-10:active, .project-alert.project-adicionar-cesta:active {
    color: #F02B39; }

/* Tabs e filters */
.project-btn-tabs, .btn-model-6, .btn-model-7 {
  color: #071543;
  border-color: rgba(7, 21, 67, 0.3); }
  .project-btn-tabs.project-hover:hover, .options-container .double-btn .project-btn-tabs.btn-left:hover, .options-container .double-btn .btn-left.btn-model-6:hover, .options-container .double-btn .btn-left.btn-model-7:hover,
  .options-container .double-btn .project-btn-tabs.btn-right:hover,
  .options-container .double-btn .btn-right.btn-model-6:hover,
  .options-container .double-btn .btn-right.btn-model-7:hover, .options-container .double-btn .project-btn-tabs.btn-periodos:hover, .options-container .double-btn .btn-periodos.btn-model-6:hover, .options-container .double-btn .btn-periodos.btn-model-7:hover,
  .options-container .double-btn .project-btn-tabs.btn-dia-semana:hover,
  .options-container .double-btn .btn-dia-semana.btn-model-6:hover,
  .options-container .double-btn .btn-dia-semana.btn-model-7:hover,
  .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-6:hover,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7:hover, .project-btn-tabs.btn-model-5:hover, .btn-model-5.btn-model-7:hover, .btn-model-6:hover, .project-hover.btn-model-7:hover, .btn-model-7.btn-model-8:hover, .btn-model-7.btn-model-9:hover, .btn-model-7.btn-model-10:hover, .btn-model-7.project-adicionar-cesta:hover, .project-btn-tabs.btn-model-8:hover, .project-btn-tabs.btn-model-9:hover, .project-btn-tabs.btn-model-10:hover, .project-btn-tabs.project-adicionar-cesta:hover {
    border-color: #071543; }
  .project-btn-tabs.project-hover:active, .options-container .double-btn .project-btn-tabs.btn-left:active, .options-container .double-btn .btn-left.btn-model-6:active, .options-container .double-btn .btn-left.btn-model-7:active,
  .options-container .double-btn .project-btn-tabs.btn-right:active,
  .options-container .double-btn .btn-right.btn-model-6:active,
  .options-container .double-btn .btn-right.btn-model-7:active, .options-container .double-btn .project-btn-tabs.btn-periodos:active, .options-container .double-btn .btn-periodos.btn-model-6:active, .options-container .double-btn .btn-periodos.btn-model-7:active,
  .options-container .double-btn .project-btn-tabs.btn-dia-semana:active,
  .options-container .double-btn .btn-dia-semana.btn-model-6:active,
  .options-container .double-btn .btn-dia-semana.btn-model-7:active,
  .options-container .double-btn .project-btn-tabs.btn-recorrencia-assinatura:active,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-6:active,
  .options-container .double-btn .btn-recorrencia-assinatura.btn-model-7:active, .project-btn-tabs.btn-model-5:active, .btn-model-5.btn-model-7:active, .btn-model-6:active, .project-hover.btn-model-7:active, .btn-model-7.btn-model-8:active, .btn-model-7.btn-model-9:active, .btn-model-7.btn-model-10:active, .btn-model-7.project-adicionar-cesta:active, .project-btn-tabs.btn-model-8:active, .project-btn-tabs.btn-model-9:active, .project-btn-tabs.btn-model-10:active, .project-btn-tabs.project-adicionar-cesta:active {
    border-color: #020715; }

.project-btn-filters {
  color: rgba(7, 21, 67, 0.5);
  border-color: rgba(7, 21, 67, 0.5); }
  .project-btn-filters.project-hover:hover, .options-container .double-btn .project-btn-filters.btn-left:hover,
  .options-container .double-btn .project-btn-filters.btn-right:hover, .options-container .double-btn .project-btn-filters.btn-periodos:hover,
  .options-container .double-btn .project-btn-filters.btn-dia-semana:hover,
  .options-container .double-btn .project-btn-filters.btn-recorrencia-assinatura:hover, .project-btn-filters.btn-model-5:hover, .project-btn-filters.btn-model-6:hover, .project-btn-filters.btn-model-8:hover, .project-btn-filters.btn-model-9:hover, .project-btn-filters.btn-model-10:hover, .project-btn-filters.project-adicionar-cesta:hover {
    color: #071543;
    border-color: #071543; }
  .project-btn-filters.project-hover:active, .options-container .double-btn .project-btn-filters.btn-left:active,
  .options-container .double-btn .project-btn-filters.btn-right:active, .options-container .double-btn .project-btn-filters.btn-periodos:active,
  .options-container .double-btn .project-btn-filters.btn-dia-semana:active,
  .options-container .double-btn .project-btn-filters.btn-recorrencia-assinatura:active, .project-btn-filters.btn-model-5:active, .project-btn-filters.btn-model-6:active, .project-btn-filters.btn-model-8:active, .project-btn-filters.btn-model-9:active, .project-btn-filters.btn-model-10:active, .project-btn-filters.project-adicionar-cesta:active {
    color: black;
    border-color: #020715; }

/* Highlight */
.project-btn-highlight, .project-loading .status, .project-alerts {
  color: #81D362;
  border-color: #81D362;
  background-color: transparent; }

.project-btn-highlight-alert, .project-alerts {
  color: #d36292;
  border-color: #d36292;
  background-color: transparent; }

/* Translucido */
.project-btn-translucid {
  background-color: transparent;
  color: #fff;
  border-color: rgba(255, 255, 255, 0.5); }
  .project-btn-translucid.project-hover:hover, .options-container .double-btn .project-btn-translucid.btn-left:hover,
  .options-container .double-btn .project-btn-translucid.btn-right:hover, .options-container .double-btn .project-btn-translucid.btn-periodos:hover,
  .options-container .double-btn .project-btn-translucid.btn-dia-semana:hover,
  .options-container .double-btn .project-btn-translucid.btn-recorrencia-assinatura:hover, .project-btn-translucid.btn-model-5:hover, .project-btn-translucid.btn-model-6:hover, .project-btn-translucid.btn-model-8:hover, .project-btn-translucid.btn-model-9:hover, .project-btn-translucid.btn-model-10:hover, .project-btn-translucid.project-adicionar-cesta:hover {
    background-color: transparent;
    border-color: #fff;
    color: #fff; }
  .project-btn-translucid.project-hover:active, .options-container .double-btn .project-btn-translucid.btn-left:active,
  .options-container .double-btn .project-btn-translucid.btn-right:active, .options-container .double-btn .project-btn-translucid.btn-periodos:active,
  .options-container .double-btn .project-btn-translucid.btn-dia-semana:active,
  .options-container .double-btn .project-btn-translucid.btn-recorrencia-assinatura:active, .project-btn-translucid.btn-model-5:active, .project-btn-translucid.btn-model-6:active, .project-btn-translucid.btn-model-8:active, .project-btn-translucid.btn-model-9:active, .project-btn-translucid.btn-model-10:active, .project-btn-translucid.project-adicionar-cesta:active {
    color: #cccccc;
    border-color: #e6e6e6; }

/**
  * Backgrounds / Colors




*/
.project-bg-base-color {
  background-color: #071543;
  color: #fff; }
  .project-bg-base-color a {
    color: #fff; }
    .project-bg-base-color a:hover {
      color: #81C5FA; }
    .project-bg-base-color a:hover {
      color: darken #81C5FA, 20; }

.project-bg-dark {
  background-color: #071543; }
  .project-bg-dark p, .project-bg-dark h1, .project-bg-dark h2, .project-bg-dark h3, .project-bg-dark h4, .project-bg-dark h5, .project-bg-dark h6 {
    color: #fff; }

.project-color-base-color {
  color: #071543; }

.project-bg-complementar, .btn-model-5 {
  background-color: #81C5FA; }

.project-color-complementar, .options-container .header .title-complement p, .checkout-topics {
  color: #81C5FA; }

.project-color-success {
  color: #61C835; }

.project-color-alert {
  color: #F02B39; }

/**
  * Data list e Headers





*/
.project-headers.project-headers-dark {
  color: #fff; }
  .project-headers.project-headers-dark h2 {
    color: #fff; }
.project-headers.project-headers-complementar {
  color: #fff;
  background-color: #cbe7fd; }

.project-data-list article table th, .project-data-list article table td {
  color: #fff;
  border-color: rgba(255, 255, 255, 0.2); }
.project-data-list article table tr:hover td {
  background-color: rgba(129, 197, 250, 0.2); }
.project-data-list article li {
  color: #fff;
  border-color: rgba(255, 255, 255, 0.2); }
  .project-data-list article li:hover {
    background-color: rgba(129, 197, 250, 0.2); }
.project-data-list article td input {
  background-color: transparent;
  color: #fff;
  border-bottom-color: #fff; }
.project-data-list.project-data-list-light article table th, .project-data-list.project-data-list-light article table td {
  color: #3E3E3E;
  border-color: rgba(62, 62, 62, 0.2); }
.project-data-list.project-data-list-light article table tr:hover td {
  background-color: transparent; }
.project-data-list.project-data-list-light article li {
  color: #3E3E3E;
  border-color: rgba(62, 62, 62, 0.2); }
  .project-data-list.project-data-list-light article li:hover {
    background-color: rgba(62, 62, 62, 0.1); }
  .project-data-list.project-data-list-light article li a {
    color: #717171; }
    .project-data-list.project-data-list-light article li a:hover {
      color: #3E3E3E; }
.project-data-list.project-data-list-light article td input {
  color: #3E3E3E;
  border-bottom-color: #3E3E3E; }

/**
  * Formularios





*/
.project-forms label {
  color: #81C5FA; }
.project-forms input,
.project-forms select,
.project-forms option {
  background-color: transparent;
  border-bottom-color: #fff;
  color: #fff; }
.project-forms.project-forms-light {
  background-color: #fff;
  color: #3E3E3E; }
  .project-forms.project-forms-light label {
    color: #3E3E3E; }
  .project-forms.project-forms-light input,
  .project-forms.project-forms-light option,
  .project-forms.project-forms-light select {
    border-bottom-color: #3E3E3E;
    color: #3E3E3E; }

/**
  * Cupom de Desconto





*/
.project-cupom-block .project-cbspacing input {
  background-color: transparent; }

/**
  * Grid de Produtos






*/
.project-categories.project-cat-natural {
  color: #9AD6FD !important; }
.project-categories.project-cat-gaseificada {
  color: #FF8336 !important; }

.project-tabs .project-tabs-results,
.project-tabs .project-btn-tab-active,
.project-tabs .btn-model-7 {
  background-color: #EBEBEB; }
.project-tabs .project-btn-tab-active, .project-tabs .btn-model-7 {
  border-top-color: #071543;
  border-left-color: #EBEBEB;
  border-right-color: #EBEBEB; }

.project-add-item-block .project-cbspacing {
  border-color: rgba(62, 62, 62, 0.5); }

.project-summary.project-data-list li.project-sum-price {
  color: rgba(62, 62, 62, 0.5); }

/**
  * Navegacao principal





*/
.project-side-navigation {
  color: #fff; }
  .project-side-navigation .project-sn-bg-l1 {
    border-color: rgba(255, 255, 255, 0.3); }
    .project-side-navigation .project-sn-bg-l1.project-sn-hover:hover {
      background-color: #071543; }
  .project-side-navigation .project-sn-bg-l2 {
    background-color: rgba(42, 59, 91, 0.9); }
  .project-side-navigation .project-sn-bg-l2-active {
    background-color: rgba(42, 59, 91, 0.9); }
  .project-side-navigation ul {
    background-color: rgba(7, 21, 67, 0.9); }
    .project-side-navigation ul li a {
      color: #fff; }
    .project-side-navigation ul li ul li a:hover {
      color: #81C5FA; }

/**
  * Search





*/
.project-search-box {
  border-color: rgba(62, 62, 62, 0.2); }
  .project-search-box input {
    background-color: transparent;
    color: rgba(62, 62, 62, 0.7); }

.busca-active {
  color: #81C5FA; }

/**
  * Institucional





*/
.project-institucional .project-content p, .project-institucional .project-content ul {
  color: #717171; }
.project-institucional .project-content figure figcaption {
  color: #fff; }
.project-institucional .project-content .project-ins-nav a {
  border-left-color: #a5bbc4;
  background-color: #a5bbc4;
  color: #fff; }
  .project-institucional .project-content .project-ins-nav a:hover {
    background-color: #87a3af;
    border-left-color: #1f98f6; }
.project-institucional .project-content .project-headers h1, .project-institucional .project-content .project-headers h2 {
  color: #071543; }
.project-institucional .project-content .project-headers p.project-color-complementar, .project-institucional .project-content .project-headers .options-container .header .title-complement p, .options-container .header .title-complement .project-institucional .project-content .project-headers p, .project-institucional .project-content .project-headers p.checkout-topics {
  color: #81C5FA; }

.project-floating-bubble:hover {
  background-color: #020715; }

.project-total-products {
  background-color: #F02B39;
  color: #fff; }

.project-cadastro-steps {
  color: #fff; }

/** Fontes do Site
  * Importa o arquivo somente com as fontes da página
  * O import precisa estar no topo do documento
*/
@font-face {
  font-family: 'montserratbold';
  src: url("../assets/fonts/montserrat-bold-webfont.woff2") format("woff2"), url("../assets/fonts/montserrat-bold-webfont.woff") format("woff");
  font-weight: normal;
  font-style: normal; }
@font-face {
  font-family: 'montserratregular';
  src: url("../assets/fonts/montserrat-regular-webfont.woff2") format("woff2"), url("../assets/fonts/montserrat-regular-webfont.woff") format("woff");
  font-weight: normal;
  font-style: normal; }
@font-face {
  font-family: 'montserratlight';
  src: url("../assets/fonts/montserrat-light-webfont.woff2") format("woff2"), url("../assets/fonts/montserrat-light-webfont.woff") format("woff");
  font-weight: normal;
  font-style: normal; }
/** Estilo oficial
  * Toda a estrutura básica do site
*/
/* Elementos de layout Petropolis */
html, body {
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  position: relative; }

body {
  font-family: "montserratregular", sans, serif;
  font-size: 16px;
  padding: 0;
  margin: 0; }

h1, h2, h3, h4, h5, h6 {
  margin: 0;
  padding: 0; }

ul {
  list-style: none;
  list-style-type: none;
  padding: 0;
  margin: 0; }

input,
button,
select,
textarea,
option {
  outline: none; }

a {
  text-decoration: none;
  outline: none; }

/**
  * Home Page Banner





*/
.project-home-banner .project-hb-text,
.project-nossa-historia-banner .project-hb-text,
.project-private-label-banner .project-hb-text {
  width: 50%;
  margin: 0 auto; }
  .project-home-banner .project-hb-text h1,
  .project-nossa-historia-banner .project-hb-text h1,
  .project-private-label-banner .project-hb-text h1 {
    padding: 0 5%;
    line-height: 40px;
    margin-bottom: 35px; }

.project-home-banner {
  height: 712px;
  background: url("../assets/img/leve-onde-voce-estiver.png") no-repeat center bottom;
  background-size: cover; }
  .project-home-banner .project-hb-text {
    width: 60%; }
    .project-home-banner .project-hb-text h1 {
      font-family: "montserratregular", sans, serif;
      font-weight: normal;
      margin-top: -210px; }
      .project-home-banner .project-hb-text h1 span {
        font-family: "montserratbold", sans, serif;
        font-weight: 300;
        letter-spacing: 10px; }
    .project-home-banner .project-hb-text .project-btn, .project-home-banner .project-hb-text .project-footer .project-btn-news-footer, .project-footer .project-home-banner .project-hb-text .project-btn-news-footer, .project-home-banner .project-hb-text .project-btn-big, .project-home-banner .project-hb-text .project-adicionar-cesta, .project-home-banner .project-hb-text .project-btn-shaddow, .project-home-banner .project-hb-text .btn-model-5, .project-home-banner .project-hb-text .project-btn-tabs, .project-home-banner .project-hb-text .btn-model-6, .project-home-banner .project-hb-text .btn-model-7, .project-home-banner .project-hb-text .project-btn-filters, .project-home-banner .project-hb-text .project-btn-highlight, .project-home-banner .project-hb-text .project-loading .status, .project-loading .project-home-banner .project-hb-text .status, .project-home-banner .project-hb-text .project-alerts, .project-home-banner .project-hb-text .project-btn-translucid, .project-home-banner .project-hb-text .options-container .double-btn .btn-left, .options-container .double-btn .project-home-banner .project-hb-text .btn-left,
    .project-home-banner .project-hb-text .options-container .double-btn .btn-right,
    .options-container .double-btn .project-home-banner .project-hb-text .btn-right, .project-home-banner .project-hb-text .options-container .double-btn .btn-periodos, .options-container .double-btn .project-home-banner .project-hb-text .btn-periodos,
    .project-home-banner .project-hb-text .options-container .double-btn .btn-dia-semana,
    .options-container .double-btn .project-home-banner .project-hb-text .btn-dia-semana,
    .project-home-banner .project-hb-text .options-container .double-btn .btn-recorrencia-assinatura,
    .options-container .double-btn .project-home-banner .project-hb-text .btn-recorrencia-assinatura, .project-home-banner .project-hb-text .btn-model-8, .project-home-banner .project-hb-text .btn-model-9, .project-home-banner .project-hb-text .btn-model-10 {
      letter-spacing: 5px; }

.project-nossa-historia-banner {
  height: 668px;
  background: url("../assets/img/nossa-historia.png") no-repeat center bottom;
  background-size: cover; }
  .project-nossa-historia-banner .project-hb-text h1 {
    margin-top: -220px;
    letter-spacing: 8px;
    line-height: 50px; }

.project-private-label-banner {
  height: 500px;
  background: url("../assets/img/private-label.jpg") no-repeat center bottom;
  background-size: cover; }
  .project-private-label-banner .project-hb-text {
    width: 70%; }
    .project-private-label-banner .project-hb-text h1 {
      margin-top: 0; }
      .project-private-label-banner .project-hb-text h1 span {
        display: none; }

.project-headers-first-home {
  margin-top: -30px; }
  .project-headers-first-home h1 {
    font-family: "montserratregular", sans, serif !important;
    font-weight: normal !important;
    letter-spacing: 2px !important; }

/**
  * Header / Footer





*/
.project-float-start-nav {
  width: 38px;
  float: right;
  margin: 18px; }

.project-float-login-nav img, .project-float-login-nav span {
  float: left; }
.project-float-login-nav span {
  display: block; }

.project-header .project-hicon-left,
.project-header .project-hicon-right {
  outline: none;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  .project-header .project-hicon-left img,
  .project-header .project-hicon-right img {
    height: 38px;
    width: auto; }
.project-header .project-hicon-center img {
  max-width: 100%;
  height: 52px; }
.project-header .project-hicon-left img,
.project-header .project-hicon-left span {
  float: left; }
.project-header .project-hicon-left span {
  margin-top: 14px;
  margin-left: 5px; }
.project-header .project-hicon-left,
.project-header .project-hicon-center,
.project-header .project-hicon-right {
  height: 56px; }

.project-footer h2 {
  font-family: "montserratbold", sans, serif;
  font-weight: 300;
  letter-spacing: 2px; }
.project-footer a:hover {
  text-decoration: underline; }
.project-footer .project-bg-base-color {
  height: 100px; }
.project-footer .project-overlayer {
  margin: -50px 25px 100px 25px; }
.project-footer .project-headers img {
  margin: 10px 0 0 0; }
.project-footer .project-headers p {
  padding: 0 20%; }
.project-footer .project-btn-news-footer {
  font-size: 0.6em;
  border: none;
  letter-spacing: 1px;
  font-family: "montserratregular", sans, serif !important;
  font-weight: normal !important;
  margin: 25px auto;
  padding: 10px 25px; }
.project-footer .project-social-footer {
  margin: 25px 0; }
  .project-footer .project-social-footer img {
    height: 28px;
    width: auto;
    max-width: 100%; }
  .project-footer .project-social-footer img:first-child {
    margin-right: 10px; }
  .project-footer .project-social-footer img:last-child {
    margin-left: 10px; }
.project-footer .project-footer-mail {
  display: block;
  margin-top: 8px; }

/**
  * Botoes





*/
.project-borders, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-translucid {
  border-width: 1px;
  border-style: solid; }

.project-btn, .project-footer .project-btn-news-footer, .project-btn-big, .project-adicionar-cesta, .project-btn-shaddow, .btn-model-5, .project-btn-tabs, .btn-model-6, .btn-model-7, .project-btn-filters, .project-btn-highlight, .project-loading .status, .project-alerts, .project-btn-translucid, .options-container .double-btn .btn-left,
.options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
.options-container .double-btn .btn-dia-semana,
.options-container .double-btn .btn-recorrencia-assinatura, .btn-model-8, .btn-model-9, .btn-model-10 {
  font-family: "montserratbold", sans, serif;
  font-weight: 300; }

.project-btn-dark, .project-footer .project-btn-news-footer {
  border-radius: 0; }

.project-btn-highlight, .project-loading .status, .project-alerts {
  padding: 8px;
  border-width: 2px;
  border-style: solid;
  letter-spacing: 3px;
  font-family: "montserratregular", sans, serif;
  font-weight: normal; }

.project-floating-bubble {
  width: 65px;
  height: 65px;
  position: fixed;
  bottom: 20px;
  right: 23px;
  z-index: 1000;
  box-shadow: -4px 9px 39px 4px rgba(0, 0, 0, 0.3); }
  .project-floating-bubble div {
    display: table-cell;
    height: 100%;
    vertical-align: middle; }
    .project-floating-bubble div img {
      width: 35px;
      height: auto;
      max-width: 48px; }

.project-total-products {
  position: fixed;
  bottom: 65px;
  right: 23px;
  z-index: 1001; }

#cart-itens {
  width: 20px;
  height: 12px;
  padding: 4px 0;
  text-align: center;
  overflow: hidden;
  display: block; }

/**
  * Alinhamentos / espacadores





*/
.project-container {
  padding: 15px; }

.project-max-width {
  width: 100%;
  max-width: 520px;
  margin: 0 auto; }

/**
  * Data list e Headers





*/
.project-headers {
  line-height: 18px; }
  .project-headers img {
    max-height: 100%;
    margin-bottom: 10px; }
  .project-headers h2, .project-headers p {
    padding: 0 10%; }
  .project-headers.project-basket h2 {
    letter-spacing: 3px; }

.project-data-list article ul, .project-data-list article table {
  margin: 20px 0; }
.project-data-list article th {
  padding: 12px 0; }
.project-data-list article .project-list-separator td {
  border-top: none;
  padding-top: 25px; }
.project-data-list article li, .project-data-list article td {
  border-top-width: 2px;
  border-top-style: solid;
  padding: 8px 0; }
  .project-data-list article li img, .project-data-list article td img {
    float: left;
    margin-right: 10px; }
  .project-data-list article li input, .project-data-list article td input {
    border: none;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    padding: 10px; }

/**
  * Formularios





*/
.project-forms .project-fspacing {
  padding: 5px; }
.project-forms .project-small-input {
  margin: 0 auto;
  width: 30%; }
.project-forms label {
  position: relative;
  top: 28px;
  transition: all ease .2s; }
.project-forms .project-label-back {
  top: 0;
  transition: all ease .2s; }
.project-forms input,
.project-forms select,
.project-forms option {
  border: none;
  border-bottom-width: 2px;
  border-bottom-style: solid;
  width: 100%;
  padding: 8px 0;
  position: relative; }
.project-forms select,
.project-forms option {
  height: 34px;
  -webkit-appearance: none;
  border-radius: 0; }

/**
  * Cupom de Desconto





*/
.project-cupom-block {
  margin: 25px 0; }
  .project-cupom-block .project-cbspacing {
    padding: 8px 8px 9px 8px;
    box-sizing: border-box;
    height: 35px; }
    .project-cupom-block .project-cbspacing input {
      border: none;
      width: 100%; }
  .project-cupom-block .project-btn-cupom {
    letter-spacing: 1px;
    box-sizing: border-box;
    height: 35px; }

/**
  * Grid de Produtos






*/
.project-categories {
  letter-spacing: 1px; }

.project-related {
  margin: 15px 8px; }
  .project-related h3 {
    display: inline;
    background-color: #fff;
    letter-spacing: 2px;
    position: relative;
    padding-right: 10px; }
  .project-related:before {
    content: "";
    position: absolute;
    width: calc( 100% - 16px );
    border: 1px solid rgba(0, 0, 0, 0.3);
    margin-top: 12px; }
  .project-related.project-related-spaced {
    margin: 15px; }
    .project-related.project-related-spaced:before {
      width: calc( 100% - 30px ); }

.project-tabs .project-tabs-nav,
.project-tabs .project-tabs-results {
  position: relative; }
.project-tabs .project-tabs-nav {
  z-index: 999; }
.project-tabs .project-tabs-results {
  box-shadow: 0px 7px 24px -10px #696969;
  z-index: 998;
  padding: 5px;
  margin: -2px 0 10px 0; }
  .project-tabs .project-tabs-results .gs-coluna {
    padding: 5px; }
  .project-tabs .project-tabs-results .project-btn-dark, .project-tabs .project-tabs-results .project-footer .project-btn-news-footer, .project-footer .project-tabs .project-tabs-results .project-btn-news-footer {
    padding: 13px 8px; }
.project-tabs .project-btn-tab-active, .project-tabs .btn-model-7 {
  border-bottom: none;
  border-top-width: 4px;
  border-top-style: solid;
  padding: 10px 8px 22px 8px; }

.project-add-item-block {
  margin: 25px 0; }
  .project-add-item-block .project-cbspacing {
    padding: 14px 8px 15px 8px;
    border-width: 1px;
    border-style: solid;
    border-right: none;
    box-sizing: border-box;
    height: 50px; }
    .project-add-item-block .project-cbspacing input {
      border: none;
      width: 100%; }

.project-summary {
  margin: 25px 0; }
  .project-summary.project-data-list li:first-child {
    border-top: none; }

/**
  * Navegacao principal





*/
.project-overflow-screen {
  visibility: hidden;
  position: fixed;
  width: 100%;
  top: 0;
  right: 0;
  height: 100vh;
  z-index: 3000;
  background-color: rgba(255, 255, 255, 0.1);
  transition: all ease-in 0.6s; }

.project-overflow-screen-active {
  visibility: visible;
  background-color: rgba(255, 255, 255, 0.5);
  transition: all ease-out 0.6s; }

.project-overflow-screen-dark {
  visibility: hidden;
  position: fixed;
  width: 100%;
  top: 0;
  right: 0;
  height: 100vh;
  z-index: 3000;
  background-color: rgba(0, 0, 0, 0.1);
  transition: all ease-in 0.6s; }

.project-overflow-screen-dark-active {
  visibility: visible;
  background-color: rgba(0, 0, 0, 0.5);
  transition: all ease-out 0.6s; }
  .project-overflow-screen-dark-active .project-loading-dark {
    background: transparent;
    box-shadow: none;
    width: 100%;
    height: 500px;
    margin: -250px 0 0 0;
    padding: 0;
    top: 50%;
    position: absolute; }

.project-float-menu {
  position: absolute;
  width: 100%;
  top: 0;
  right: -100%;
  min-height: 100vh;
  height: auto;
  z-index: 3002;
  transition: all ease-in 0.6s; }

.project-float-menu-active {
  right: 0;
  transition: all ease-out 0.6s; }

.project-side-navigation:before {
  content: "";
  display: block;
  width: 10px;
  height: 100%;
  position: absolute;
  background: url("../assets/img/bg-nav-menu.png") repeat-y left top;
  margin-left: -9px; }
.project-side-navigation .project-sn-bg-l1,
.project-side-navigation .project-sn-bg-l2 li,
.project-side-navigation .project-sn-bg-l2-active {
  display: block;
  padding: 20px 15px; }
.project-side-navigation .project-sn-bg-l1 {
  border-bottom-width: 1px;
  border-bottom-style: solid; }
.project-side-navigation ul li:last-child,
.project-side-navigation ul a:last-child {
  border-bottom: none; }
.project-side-navigation ul li img {
  height: 30px;
  width: auto;
  width: 30px;
  max-width: 30px; }
.project-side-navigation ul li span {
  display: block;
  padding: 8px; }
.project-side-navigation ul li a {
  text-decoration: none; }
.project-side-navigation ul li ul li {
  display: block;
  background-image: url("../assets/img/icone-menu-middle.svg");
  background-repeat: no-repeat;
  background-position: 10.99999999999999% center; }
  .project-side-navigation ul li ul li:hover {
    background-image: url("../assets/img/icone-menu-middle-hover.svg"); }
  .project-side-navigation ul li ul li:first-child {
    background-image: url("../assets/img/icone-menu-top.svg"); }
  .project-side-navigation ul li ul li:last-child {
    background-image: url("../assets/img/icone-menu-bottom.svg"); }
    .project-side-navigation ul li ul li:last-child:hover {
      background-image: url("../assets/img/icone-menu-bottom-hover.svg"); }

/**
  * Search





*/
.project-search-box {
  padding: 8px;
  border-width: 1px;
  border-style: solid; }
  .project-search-box img {
    width: 18px;
    height: 18px; }
  .project-search-box input {
    width: 100%;
    border: none; }

/**
  * Header para usuarios





*/
.filter-centralizar {
  left: 50%;
  margin-left: -16.6666666667%; }

.filter-sub-centralizar {
  left: 50%;
  margin-left: -24.99999999999999%; }

.project-header-user {
  margin-top: 25px; }
  .project-header-user .project-perfil {
    border-width: 5px;
    border-style: solid;
    margin: 0 auto;
    width: 120px;
    height: 120px; }
  .project-header-user .gs-spacer {
    height: 21px; }
    .project-header-user .gs-spacer span {
      padding-top: 10px; }
  .project-header-user .project-bg-base-color {
    height: 100px; }
  .project-header-user .project-overlayer {
    margin: -70px 25px 25px 25px; }
  .project-header-user .project-headers img {
    margin: 10px 0 0 0; }
  .project-header-user .project-headers p {
    margin: 0; }
  .project-header-user .project-btn-filters {
    letter-spacing: 0;
    padding: 12px 35px;
    margin: 15px auto; }

/**
  * Institucional





*/
.project-institucional h1, .project-institucional h2, .project-institucional h3, .project-institucional h4, .project-institucional h5, .project-institucional h6, .project-institucional b, .project-institucional strong {
  font-family: "montserratbold", sans, serif;
  font-weight: 300; }
.project-institucional h1 {
  letter-spacing: 5px;
  padding: 25px 0;
  line-height: 30px; }
.project-institucional .project-content {
  padding: 25px; }
  .project-institucional .project-content p, .project-institucional .project-content ul {
    line-height: 30px;
    margin-bottom: 25px; }
  .project-institucional .project-content .project-visao-itens {
    list-style: circle;
    list-style-type: disc;
    margin-left: 60px;
    margin-right: 60px; }
  .project-institucional .project-content figure.project-fig-filter {
    position: relative;
    margin: 0; }
    .project-institucional .project-content figure.project-fig-filter img {
      width: 100%; }
      .project-institucional .project-content figure.project-fig-filter img:hover {
        filter: none; }
    .project-institucional .project-content figure.project-fig-filter figcaption {
      position: absolute;
      background-image: url("../assets/img/icone-seta-direita.svg");
      background-repeat: no-repeat;
      background-position: right 8px center;
      background-size: 20px;
      width: calc( 100% - 16px );
      padding: 13px 8px 8px 8px;
      bottom: 4px;
      letter-spacing: 2px; }
  .project-institucional .project-content .project-ins-nav {
    margin: 25px 0; }
    .project-institucional .project-content .project-ins-nav li {
      margin-bottom: 15px; }
    .project-institucional .project-content .project-ins-nav a {
      display: block;
      padding: 17px 15px 15px 25px;
      border-left-width: 3px;
      border-left-style: solid; }
      .project-institucional .project-content .project-ins-nav a img {
        height: 28px;
        width: auto;
        float: right; }
  .project-institucional .project-content .project-headers img {
    margin-top: 25px;
    margin-bottom: 0; }
  .project-institucional .project-content .project-headers p.project-color-complementar, .project-institucional .project-content .project-headers .options-container .header .title-complement p, .options-container .header .title-complement .project-institucional .project-content .project-headers p, .project-institucional .project-content .project-headers p.checkout-topics {
    margin: 0 0 15px 0;
    letter-spacing: 2px; }
  .project-institucional .project-content .project-headers p {
    line-height: 22px; }

.project-bold, .checkout-list li b, .checkout-list div.list-box b {
  font-family: "montserratbold", sans, serif; }

.project-cadastro-steps {
  display: block;
  padding: 25px 0;
  letter-spacing: 10px;
  font-size: 0.6em; }

@media screen and (max-width: 320px) {
  body {
    font-size: 13px; }

  .project-side-navigation .project-sn-bg-l1,
  .project-side-navigation .project-sn-bg-l2 li,
  .project-side-navigation .project-sn-bg-l2-active {
    padding: 10px; }
  .project-side-navigation ul li img {
    height: 25px;
    width: 25px;
    max-width: 25px; } }
@media screen and (max-width: 375px) {
  body {
    font-size: 14px; }

  .project-side-navigation .project-sn-bg-l1,
  .project-side-navigation .project-sn-bg-l2 li,
  .project-side-navigation .project-sn-bg-l2-active {
    padding: 15px; }
  .project-side-navigation ul li img {
    height: 28px;
    width: 28px;
    max-width: 28px; } }
/** Estilos internos Petropolis
  * Otimização de estilos
*/
.project-loading {
  background-color: #071543;
  color: #fff;
  padding: 15px 15px 18px 15px; }
  .project-loading .messages a {
    color: #fff;
    border: 2px solid #fff;
    background-color: transparent;
    padding: 8px 15px;
    margin: -6px;
    float: left; }
    .project-loading .messages a:hover {
      background: #fff;
      color: #071543; }
  .project-loading .status {
    float: right;
    margin-top: -6px;
    padding: 4px 8px;
    letter-spacing: 1px;
    cursor: pointer; }
    .project-loading .status.alert {
      border-color: #d36292;
      color: #d36292; }

.options-container {
  min-height: 100vh;
  background: url("../assets/img/blur-effect.png") no-repeat center;
  background-size: cover; }
  .options-container .header {
    padding: 50px 0 50px 0; }
    .options-container .header .icone img {
      height: 48px;
      max-width: 100%;
      margin: 0 auto;
      margin-bottom: 10px; }
    .options-container .header .title h1 {
      text-transform: uppercase;
      color: #fff;
      padding: 0 0 15px 0;
      margin: 0; }
    .options-container .header .title-complement p {
      padding: 0;
      margin: 0; }
  .options-container form label {
    color: #fff; }
  .options-container form input {
    color: #fff;
    border-color: #fff; }
  .options-container .project-btn, .options-container .project-footer .project-btn-news-footer, .project-footer .options-container .project-btn-news-footer, .options-container .project-btn-big, .options-container .project-adicionar-cesta, .options-container .project-btn-shaddow, .options-container .btn-model-5, .options-container .project-btn-tabs, .options-container .btn-model-6, .options-container .btn-model-7, .options-container .project-btn-filters, .options-container .project-btn-highlight, .options-container .project-loading .status, .project-loading .options-container .status, .options-container .project-alerts, .options-container .project-btn-translucid, .options-container .double-btn .btn-left,
  .options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
  .options-container .double-btn .btn-dia-semana,
  .options-container .double-btn .btn-recorrencia-assinatura, .options-container .btn-model-8, .options-container .btn-model-9, .options-container .btn-model-10 {
    padding: 13px;
    width: 100%;
    margin: 25px 0; }
  .options-container .double-btn .gs-coluna-6 {
    box-sizing: border-box; }
  .options-container .double-btn .gs-coluna-6:nth-child(1) {
    border-right: 20px solid transparent; }
  .options-container .double-btn .gs-coluna-6:nth-child(2) {
    border-left: 20px solid transparent; }
  .options-container .double-btn .btn-left,
  .options-container .double-btn .btn-right {
    width: auto; }
  .options-container .double-btn .btn-left {
    background: #fff url(../assets/img/icone-seta-esquerda-azul.svg) no-repeat 10px center;
    background-size: 20px;
    color: #071543; }
    .options-container .double-btn .btn-left:hover {
      background-image: url(../assets/img/icone-seta-esquerda-azul-claro.svg);
      background-repeat: no-repeat;
      background-position: 10px center;
      background-size: 20px;
      color: #81C5FA; }
  .options-container .double-btn .btn-right {
    background: #61C835 url(../assets/img/icone-seta-direita-branca.svg) no-repeat right 10px center;
    background-size: 20px;
    color: #fff; }
    .options-container .double-btn .btn-right:hover {
      background-image: url(../assets/img/icone-seta-direita-branca.svg);
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-color: #9fdf84;
      background-size: 20px;
      color: #fff; }
    .options-container .double-btn .btn-right.complementar {
      background: #81C5FA url(../assets/img/icone-seta-direita-branca.svg) no-repeat right 10px center;
      background-size: 20px;
      color: #fff; }
      .options-container .double-btn .btn-right.complementar:hover {
        background-image: url(../assets/img/icone-seta-direita-branca.svg);
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-color: #b2dcfc;
        background-size: 20px;
        color: #fff; }
      .options-container .double-btn .btn-right.complementar:active {
        background-image: url(../assets/img/icone-seta-direita-branca.svg);
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-color: #50aef8;
        background-size: 20px;
        color: #cccccc; }
  .options-container .double-btn .btn-periodos,
  .options-container .double-btn .btn-dia-semana,
  .options-container .double-btn .btn-recorrencia-assinatura {
    width: auto;
    background-color: #81C5FA;
    color: #fff; }
    .options-container .double-btn .btn-periodos:hover,
    .options-container .double-btn .btn-dia-semana:hover,
    .options-container .double-btn .btn-recorrencia-assinatura:hover {
      background-color: #b2dcfc;
      color: #fff; }
    .options-container .double-btn .btn-periodos:active,
    .options-container .double-btn .btn-dia-semana:active,
    .options-container .double-btn .btn-recorrencia-assinatura:active {
      background-color: #50aef8;
      color: #cccccc; }
    .options-container .double-btn .btn-periodos.btn-periodos-active, .options-container .double-btn .btn-periodos.btn-dia-semana-active, .options-container .double-btn .btn-periodos.btn-recorrencia-assinatura-active,
    .options-container .double-btn .btn-dia-semana.btn-periodos-active,
    .options-container .double-btn .btn-dia-semana.btn-dia-semana-active,
    .options-container .double-btn .btn-dia-semana.btn-recorrencia-assinatura-active,
    .options-container .double-btn .btn-recorrencia-assinatura.btn-periodos-active,
    .options-container .double-btn .btn-recorrencia-assinatura.btn-dia-semana-active,
    .options-container .double-btn .btn-recorrencia-assinatura.btn-recorrencia-assinatura-active {
      background-color: #071543;
      color: #fff; }
  .options-container .double-btn .small-label-periodos-checkout {
    font-size: 1.1em; }
  .options-container .double-btn .small-periodos-checkout {
    font-size: 0.9em; }

.btn-model-1 {
  border: none; }
  .btn-model-1 .add-endereco:before,
  .btn-model-1 .add-cartao:before {
    content: "";
    display: block;
    float: left;
    background: url(../assets/img/icone-add-endereco.svg) no-repeat center;
    background-size: 22px;
    width: 25px;
    height: 18px; }

.btn-model-2 {
  display: block;
  width: auto;
  background: transparent;
  border: 2px solid #fff;
  color: mediumaquamarine;
  text-transform: uppercase;
  padding: 17px;
  margin-bottom: 20px;
  border-radius: 4px;
  text-align: center; }
  .btn-model-2:hover {
    background-color: #fff;
    color: #071543; }

.btn-model-3 {
  font-family: "montserratregular", sans, serif;
  font-weight: normal;
  display: block;
  width: auto;
  background: #071543;
  color: #fff;
  text-transform: uppercase;
  padding: 17px;
  margin-bottom: 20px;
  border-radius: 4px;
  text-align: center; }
  .btn-model-3:hover {
    color: #81C5FA; }

.btn-model-4 {
  font-family: "montserratregular", sans, serif;
  font-weight: normal;
  display: block;
  width: auto;
  background: transparent;
  color: #717171;
  text-transform: uppercase;
  padding: 14px;
  margin-bottom: 20px;
  border-radius: 4px;
  text-align: center;
  border: 1px solid #717171; }
  .btn-model-4:hover {
    color: darken #3E3E3E, 10;
    border: 1px solid #3E3E3E; }

.btn-model-5 {
  background-image: url("../assets/img/icone-calendario.svg");
  background-repeat: no-repeat;
  background-position: 10px center;
  background-size: 30px; }
  .btn-model-5:hover {
    background-color: #b2dcfc;
    background-image: url("../assets/img/icone-calendario.svg");
    background-repeat: no-repeat;
    background-position: 10px center;
    background-size: 30px;
    color: #fff !important; }
  .btn-model-5:active {
    background-color: #50aef8;
    background-image: url("../assets/img/icone-calendario.svg");
    background-repeat: no-repeat;
    background-position: 10px center;
    background-size: 30px;
    color: #fff !important; }
  .btn-model-5.btn-model-5-cart {
    width: auto;
    box-shadow: none;
    margin: 0;
    text-transform: none; }

.btn-model-6 {
  background-image: url("../assets/img/icone-buscar-lupa.svg");
  background-repeat: no-repeat;
  background-position: 10px center;
  background-size: 30px; }
  .btn-model-6:hover {
    background-color: transparent;
    background-image: url("../assets/img/icone-buscar-lupa.svg");
    background-repeat: no-repeat;
    background-position: 10px center;
    background-size: 30px;
    color: #81C5FA;
    border-color: #3E3E3E; }

.btn-model-7 {
  background-image: url("../assets/img/icone-filtrar-funil.svg");
  background-repeat: no-repeat;
  background-position: top 9px right 10px;
  background-size: 20px; }
  .btn-model-7:hover {
    background-color: transparent;
    background-image: url("../assets/img/icone-filtrar-funil.svg");
    background-repeat: no-repeat;
    background-position: top 9px right 10px;
    background-size: 20px;
    color: #81C5FA;
    border-color: #3E3E3E; }

.btn-model-8 {
  width: auto !important;
  margin: 0 !important;
  background-color: #E4E4E4 !important;
  color: #696969 !important; }
  .btn-model-8:hover {
    background-color: #fff !important;
    color: #5C5C5C !important; }
  .btn-model-8:active {
    background-color: #BEBEBE !important;
    color: #595959 !important; }

.btn-model-9 {
  width: auto !important;
  margin: 0 !important;
  background-color: #61C835 !important;
  color: #fff !important;
  letter-spacing: 1px; }
  .btn-model-9:hover {
    background-color: #80d45c !important;
    color: #fff; }
  .btn-model-9:active {
    background-color: #4da02a !important;
    color: #cccccc !important; }

.btn-model-10 {
  width: auto !important;
  margin: 0 auto 25px auto !important;
  background-color: #81C5FA !important;
  color: #fff !important;
  letter-spacing: 1px;
  border: none; }
  .btn-model-10:hover {
    background-color: #b2dcfc !important;
    color: #fff; }
  .btn-model-10:active {
    background-color: #50aef8 !important;
    color: #cccccc !important; }

.project-forms label {
  color: #fff; }

.edit-icon {
  width: 20px;
  display: inline-block;
  float: right !important;
  margin: 5px 10px; }

.edit-small-text {
  display: block;
  clear: both; }

.half-spacer {
  height: 26px; }
  .half-spacer span {
    padding-top: 15px; }

.gs-product-grid figure img {
  border: 2px solid transparent; }
.gs-product-grid a:hover figure img {
  border-color: transparent; }

.project-cupom-block .project-btn-cupom:hover {
  background-color: #80d45c;
  color: #fff; }
.project-cupom-block .project-btn-cupom:active {
  background-color: #4da02a;
  color: #cccccc; }

.checkout-topics {
  letter-spacing: 3px;
  padding: 8px 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.4); }

.checkout-list {
  margin: 0 0 50px 0; }
  .checkout-list li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.4); }
    .checkout-list li b {
      display: block; }
    .checkout-list li a {
      display: block;
      padding: 12px 10px 12px 0px; }
      .checkout-list li a:hover {
        background-color: rgba(255, 255, 255, 0.4);
        color: #fff; }
      .checkout-list li a:active {
        background-color: rgba(255, 255, 255, 0.5);
        color: #fff; }
      .checkout-list li a:before {
        content: "";
        background: url("../assets/img/icone-localizacao.svg") no-repeat center;
        background-size: 20px;
        float: left;
        width: 40px;
        height: 25px;
        margin-bottom: 30px; }
      .checkout-list li a:after {
        content: "";
        background: url("../assets/img/icone-followup-azul-claro.svg") no-repeat right 0;
        background-size: 20px;
        float: right;
        width: 20px;
        height: 25px; }
  .checkout-list div.list-box {
    border-bottom: 1px solid rgba(255, 255, 255, 0.4);
    display: block;
    padding: 20px; }
    .checkout-list div.list-box b {
      display: block; }
  .checkout-list.select-payment-method li a:before, .checkout-list.select-card li a:before, .checkout-list.enderecos li a:before {
    margin-bottom: 0; }
  .checkout-list.select-payment-method li a.cartao:before, .checkout-list.select-card li a.cartao:before, .checkout-list.enderecos li a.cartao:before {
    background: url("../assets/img/icone-cartao-de-credito-azul-claro.svg") no-repeat left;
    background-size: 30px;
    width: 60px; }
  .checkout-list.select-payment-method li a.dinheiro:before, .checkout-list.select-card li a.dinheiro:before, .checkout-list.enderecos li a.dinheiro:before {
    background: url("../assets/img/icone-dinheiro.svg") no-repeat center left;
    background-size: 30px;
    width: 60px; }
  .checkout-list.enderecos li a:before {
    margin-bottom: 14px; }

#vitrine-loja figure img,
#catalog figure img {
  max-width: 100%;
  max-height: 200px;
  margin: 0 auto; }
#vitrine-loja .gs-pg-summary .gs-pg-name,
#catalog .gs-pg-summary .gs-pg-name {
  font-size: 0.9em;
  height: 40px;
  width: 95%;
  margin: 0 auto; }

#catalog figure {
  text-align: center; }
  #catalog figure img {
    max-height: 140px; }

.project-alerts {
  display: block;
  font-size: 0.6em;
  width: 70%;
  margin: 0 auto; }
  .project-alerts span {
    display: block;
    margin-top: 5px;
    text-transform: none;
    letter-spacing: 1px; }

.project-adicionar-cesta {
  display: block;
  border: none;
  width: 100%;
  box-sizing: border-box;
  height: 50px; }

#carrinho-mobile .project-adicionar-cesta {
  font-size: 1.2em; }

.cart-imagem {
  display: none; }

#order-summary .checkout-list li {
  padding: 7px 0 !important; }

.checkout-list.select-payment-method .checkout-list li a.cartao:before {
  background: url("../assets/img/icone-cartao-de-credito-azul-claro.svg") no-repeat left top;
  background-size: 20px; }
.checkout-list.select-payment-method .checkout-list li a.dinheiro:before {
  background: url("../assets/img/icone-dinheiro.svg") no-repeat left top;
  background-size: 20px; }

.assine-news-footer {
  font-family: "montserratbold", sans, serif;
  font-weight: 300;
  color: #071543 !important;
  padding: 0 !important;
  width: 80%;
  margin: 0 auto;
  font-size: 0.8em; }

.link-footer a {
  color: #7D7D7D; }
  .link-footer a:hover {
    color: #071543; }

/** Ajustes Marcus */
.project-institucional .project-content p {
  font-size: 1.2em;
  text-align: center; }

.gs-pg-category {
  font-size: 1.1em;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #81C5FA; }

.gaseificada {
  color: #FF8336 !important; }

.natural {
  color: #81C5FA !important; }

.aviso-assinatura-mobile {
  border-radius: 4px;
  border: 1px solid #81C5FA;
  display: block;
  padding: 8px;
  text-align: center;
  margin: 10px 0;
  color: #81C5FA; }
  .aviso-assinatura-mobile a {
    @extends .project-bold;
    color: #81C5FA; }

.aviso-assinatura-desktop {
  border-radius: 4px;
  border: 1px solid #071543;
  display: block;
  line-height: 18px;
  font-size: 0.6em;
  padding: 10px;
  text-align: center;
  display: block;
  margin: 15px auto;
  color: #071543; }
  .aviso-assinatura-desktop a {
    @extends .project-bold;
    color: #071543; }

.aviso-regular-mobile {
  border-radius: 4px;
  border: 1px solid #fff;
  display: block;
  padding: 8px;
  text-align: center;
  margin: 10px 0;
  color: #fff; }

.aviso-regular-desktop {
  border-radius: 4px;
  border: 1px solid #071543;
  display: block;
  line-height: 18px;
  font-size: 0.6em;
  padding: 10px;
  text-align: center;
  margin: 15px 0;
  color: #071543; }

.project-loading {
  padding: 15px 15px 10px 15px;
  width: 70%;
  margin: 0 auto;
  margin-top: 30%;
  border-radius: 4px;
  box-shadow: 0 3px 30px 1px #333;
  background-color: #fff;
  color: #071543; }
  .project-loading .messages a {
    color: #071543;
    border: 2px solid #071543; }
    .project-loading .messages a:hover {
      background: #071543;
      color: #fff; }

/**
  * Esqueci minha senha
*/
.forgot-pass {
  display: block;
  text-align: center;
  margin: 25px 0 0 0; }
  .forgot-pass a {
    background: transparent;
    color: rgba(255, 255, 255, 0.4);
    border: 1px solid rgba(255, 255, 255, 0.4);
    display: inline-block;
    padding: 8px;
    border-radius: 4px;
    font-size: 12px; }
    .forgot-pass a:hover {
      background: transparent;
      color: #fff;
      border: 1px solid #fff; }

.project-btn-highlight-alert a.inline-status-btn, .project-alerts a.inline-status-btn {
  color: #d36292; }

.project-loading .messages a.inline-status-btn {
  padding: 8px;
  text-transform: none;
  float: none;
  margin: 15px 0;
  clear: both;
  display: inline-block;
  border: 1px solid #071543;
  font-size: 11px;
  font-family: "montserratregular", sans, serif; }

.push-alka {
  position: fixed;
  right: 38px;
  width: 300px;
  height: 110px;
  background: #58c2d5;
  border-radius: 4px;
  box-shadow: 0 6px 10px -4px #696969;
  transition: all 0.6s;
  opacity: 0;
  bottom: -25px; }
  .push-alka.push-show {
    opacity: 1;
    bottom: 25px;
    transition: all .3s ease-in; }
  .push-alka:hover {
    background: #2991A4;
    cursor: pointer;
    transition: all 0.3s; }
  .push-alka img {
    position: relative;
    width: 100px;
    height: auto;
    margin: 15px; }
  .push-alka span {
    position: relative;
    color: #fff;
    font-size: 0.7em;
    left: 70px;
    width: 220px;
    display: block;
    top: -32px; }

@media screen and (max-width: 550px) {
  .push-alka {
    top: -25px;
    position: absolute;
    bottom: unset;
    left: calc( 50% - 140px );
    width: 280px;
    height: 80px; }
    .push-alka img {
      margin: 5px;
      width: 80px; }
    .push-alka span {
      font-size: 1em;
      left: 50px;
      width: 220px;
      display: block;
      top: -18px; }
    .push-alka.push-show {
      top: 100px;
      bottom: unset; } }
.copyright {
  text-align: center;
  font-size: 12px;
  color: #333;
  padding: 25px 0; }
  .copyright a {
    color: #333; }
    .copyright a:hover {
      text-decoration: underline; }

/** Versão para Desktop
  * min-width: 521px
*/
@media screen and (min-width: 551px) {
  body {
    font-size: 20px; }

  .desktop-container {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto; }

  .project-overflow-screen .project-max-width {
    width: 100%;
    max-width: 100%; }

  .project-floating-bubble {
    position: fixed;
    top: 25px;
    right: 25px; }

  .project-total-products {
    position: fixed;
    top: 25px;
    right: 25px;
    width: 20px;
    height: 20px; }

  .header-desktop {
    height: 67px;
    position: absolute;
    left: 0;
    right: 0;
    top: 25px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.7em;
    z-index: 2000; }
    .header-desktop .gs-middle, .header-desktop .project-header .project-hicon-left div, .project-header .project-hicon-left .header-desktop div,
    .header-desktop .project-header .project-hicon-center div,
    .project-header .project-hicon-center .header-desktop div,
    .header-desktop .project-header .project-hicon-right div,
    .project-header .project-hicon-right .header-desktop div {
      height: 64px; }
    .header-desktop ul li {
      display: inline-block; }
      .header-desktop ul li:nth-child(1) a {
        padding: 10px 0; }
      .header-desktop ul li a {
        display: block;
        padding: 10px; }
        .header-desktop ul li a.arrow {
          padding-right: 20px; }
      .header-desktop ul li ul {
        position: absolute;
        display: none; }
        .header-desktop ul li ul li {
          display: block; }
          .header-desktop ul li ul li:nth-child(1) a {
            padding: 10px; }
    .header-desktop a[data-open="sub-logout"] {
      font-size: 0.8em;
      color: #81c4fa;
      letter-spacing: 0; }
    .header-desktop .icone-login {
      display: block;
      padding: 8px 8px 8px 38px;
      background: url("../assets/img/icone-login.svg") no-repeat left center;
      background-size: 30px auto; }
    .header-desktop .icone-lupa {
      display: block;
      padding: 8px;
      background: url("../assets/img/icone-lupa-buscar-light.svg") no-repeat center;
      background-size: 26px auto;
      width: 30px; }
    .header-desktop.light {
      color: #fff; }
      .header-desktop.light a {
        color: #fff; }
        .header-desktop.light a.arrow {
          background: url(../assets/img/desktop/menu-seta-baixo-light.svg) no-repeat center right;
          background-size: 10px; }
        .header-desktop.light a:hover {
          color: #81C5FA; }
        .header-desktop.light a.active {
          color: #81C5FA;
          background: url(../assets/img/desktop/menu-seta-baixo-complementar.svg) no-repeat center right;
          background-size: 10px; }
      .header-desktop.light .icone-login {
        background: url("../assets/img/icone-login.svg") no-repeat left center;
        background-size: 30px auto; }
        .header-desktop.light .icone-login:hover {
          background: url("../assets/img/icone-login-active.svg") no-repeat 1px center;
          background-size: 28px auto; }
      .header-desktop.light .icone-lupa {
        background: url("../assets/img/icone-lupa-buscar-light.svg") no-repeat center;
        background-size: 26px auto; }
        .header-desktop.light .icone-lupa:hover {
          background: url("../assets/img/icone-lupa-buscar-complementar.svg") no-repeat center;
          background-size: 26px auto; }
      .header-desktop.light .project-floating-bubble:hover {
        background-color: #0c2371; }
    .header-desktop.middle {
      color: #fff; }
      .header-desktop.middle a {
        color: #fff; }
        .header-desktop.middle a.arrow {
          background: url(../assets/img/desktop/menu-seta-baixo-light.svg) no-repeat center right;
          background-size: 10px; }
        .header-desktop.middle a:hover {
          color: #fff;
          font-family: "montserratbold", sans, serif;
          text-shadow: 2px 2px rgba(0, 0, 0, 0.33); }
        .header-desktop.middle a.active {
          color: #fff;
          background: url(../assets/img/desktop/menu-seta-baixo-light.svg) no-repeat center right;
          background-size: 10px;
          font-family: "montserratbold", sans, serif;
          text-shadow: 2px 2px rgba(0, 0, 0, 0.33); }
      .header-desktop.middle .icone-login {
        background: url("../assets/img/icone-login.svg") no-repeat left center;
        background-size: 30px auto; }
        .header-desktop.middle .icone-login:hover {
          background: url("../assets/img/icone-login-dark.svg") no-repeat 1px center;
          background-size: 28px auto; }
      .header-desktop.middle .icone-lupa {
        background: url("../assets/img/icone-lupa-buscar-light.svg") no-repeat center;
        background-size: 26px auto; }
        .header-desktop.middle .icone-lupa:hover {
          background: url("../assets/img/icone-lupa-buscar.svg") no-repeat center;
          background-size: 26px auto; }
      .header-desktop.middle .project-floating-bubble {
        background-color: rgba(7, 21, 67, 0.7); }
        .header-desktop.middle .project-floating-bubble:hover {
          background-color: #0c2371; }
      .header-desktop.middle ul li ul {
        background-color: rgba(7, 21, 67, 0.4); }
      .header-desktop.middle ul li ul li a {
        color: #fff; }
        .header-desktop.middle ul li ul li a:hover {
          color: #81C5FA; }
    .header-desktop.dark {
      color: #071543; }
      .header-desktop.dark a {
        color: #071543; }
        .header-desktop.dark a.arrow {
          background: url(../assets/img/desktop/menu-seta-baixo.svg) no-repeat center right;
          background-size: 10px; }
        .header-desktop.dark a:hover {
          color: #81C5FA; }
        .header-desktop.dark a.active {
          color: #81C5FA;
          background: url(../assets/img/desktop/menu-seta-baixo-complementar.svg) no-repeat center right;
          background-size: 10px; }
        .header-desktop.dark a .icone-login {
          background: url("../assets/img/icone-login-dark.svg") no-repeat left center;
          background-size: 30px auto; }
          .header-desktop.dark a .icone-login:hover {
            background: url("../assets/img/icone-login-active.svg") no-repeat 1px center;
            background-size: 28px auto; }
        .header-desktop.dark a .icone-lupa {
          background: url("../assets/img/icone-lupa-buscar.svg") no-repeat center;
          background-size: 26px auto; }
          .header-desktop.dark a .icone-lupa:hover {
            background: url("../assets/img/icone-lupa-buscar-complementar.svg") no-repeat center;
            background-size: 26px auto; }
      .header-desktop.dark .project-floating-bubble {
        box-shadow: 0 3px 10px -1px #00000040;
        background-color: #cccccc5c; }
        .header-desktop.dark .project-floating-bubble:hover {
          background-color: #fff; }
      .header-desktop.dark .project-total-products {
        background-color: #ccc;
        color: #071543; }
      .header-desktop.dark ul li ul {
        background-color: rgba(255, 255, 255, 0.6); }
    .header-desktop .menu-login img, .header-desktop .menu-login span {
      float: left; }
    .header-desktop .menu-login span {
      margin: 5px 10px; }

  .second-footer {
    border-top: 1px solid #071543;
    padding-top: 50px; }
    .second-footer .gs-coluna {
      text-align: left; }
      .second-footer .gs-coluna a:hover {
        text-decoration: none; }
      .second-footer .gs-coluna p {
        font-size: 0.7em; }
        .second-footer .gs-coluna p a {
          color: rgba(0, 0, 0, 0.5); }
          .second-footer .gs-coluna p a:hover {
            color: #000; }
      .second-footer .gs-coluna ul {
        font-size: 0.7em;
        padding: 20px 0; }
        .second-footer .gs-coluna ul li {
          margin-bottom: 10px;
          font-family: 'montserratbold', sans, serif;
          font-weight: 300; }
        .second-footer .gs-coluna ul a {
          color: rgba(0, 0, 0, 0.5); }
          .second-footer .gs-coluna ul a:hover {
            color: #000; }
    .second-footer .project-social-footer img,
    .second-footer .project-social-footer img:last-child,
    .second-footer .project-social-footer img:first-child {
      margin: 0; }

  .project-home-banner {
    background: url("../assets/img/desktop/banner-home-v3.jpg") no-repeat center bottom;
    background-size: cover;
    height: 100vh; }
    .project-home-banner .project-hb-text {
      width: 30%;
      float: left;
      height: 100vh;
      color: #fff; }
      .project-home-banner .project-hb-text h1 {
        color: #fff;
        margin-top: 0;
        line-height: 55px;
        font-size: 2.3em; }
    .project-home-banner .peca-ja {
      display: block;
      padding: 15px 0;
      text-align: center;
      color: #fff;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 6px;
      text-transform: uppercase;
      letter-spacing: 4px;
      width: 200px; }
      .project-home-banner .peca-ja:hover {
        color: #071543;
        background: rgba(255, 255, 255, 0.7); }

  .project-headers-first-home {
    margin-top: -150px; }

  #vitrine-loja-desktop,
  #catalog-desktop {
    font-size: 1em;
    /* Slick Slide */ }
    #vitrine-loja-desktop figure,
    #catalog-desktop figure {
      height: 200px; }
      #vitrine-loja-desktop figure img,
      #catalog-desktop figure img {
        max-width: 100%;
        max-height: 200px;
        margin: 0 auto; }
    #vitrine-loja-desktop .gs-pg-container,
    #catalog-desktop .gs-pg-container {
      height: 440px; }
    #vitrine-loja-desktop .gs-pg-summary,
    #catalog-desktop .gs-pg-summary {
      font-size: 0.6em;
      height: 140px;
      overflow: hidden;
      bottom: 76px; }
      #vitrine-loja-desktop .gs-pg-summary .gs-pg-category,
      #catalog-desktop .gs-pg-summary .gs-pg-category {
        font-size: 0.9em; }
      #vitrine-loja-desktop .gs-pg-summary .gs-pg-name,
      #catalog-desktop .gs-pg-summary .gs-pg-name {
        width: 100%;
        margin: 0 auto;
        font-size: 1.2em;
        height: 40px;
        /* Gera duas linhas para nome do produto */
        overflow: hidden; }
      #vitrine-loja-desktop .gs-pg-summary .gs-pg-attribute,
      #catalog-desktop .gs-pg-summary .gs-pg-attribute {
        margin: 4px 0 10px 0;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #969696;
        margin: 0 0 10px 0;
        padding: 0; }
      #vitrine-loja-desktop .gs-pg-summary .gs-pg-price,
      #catalog-desktop .gs-pg-summary .gs-pg-price {
        font-size: 1.5em; }
    #vitrine-loja-desktop .desktop-add-basket .project-adicionar-cesta,
    #catalog-desktop .desktop-add-basket .project-adicionar-cesta {
      background-color: #071543;
      background-image: url("../assets/img/icone-cesta-complementar.svg");
      background-repeat: no-repeat;
      background-position: 15px center;
      background-size: 25px;
      color: #81C5FA;
      font-size: 0.6em;
      text-transform: none;
      letter-spacing: 1px;
      padding-left: 20px;
      text-align: center;
      border-radius: 4px !important;
      bottom: 20px;
      position: absolute;
      width: calc( 100% - 20px ); }
      #vitrine-loja-desktop .desktop-add-basket .project-adicionar-cesta:hover,
      #catalog-desktop .desktop-add-basket .project-adicionar-cesta:hover {
        background-color: #0c2371; }
      #vitrine-loja-desktop .desktop-add-basket .project-adicionar-cesta:active,
      #catalog-desktop .desktop-add-basket .project-adicionar-cesta:active {
        background: #020715; }
    #vitrine-loja-desktop .slick-prev, #vitrine-loja-desktop .slick-next,
    #catalog-desktop .slick-prev,
    #catalog-desktop .slick-next {
      height: 80px;
      width: 80px;
      top: 40%;
      -webkit-transform: translate(0, -40%);
      -ms-transform: translate(0, -40%);
      transform: translate(0, -40%);
      z-index: 2000; }
    #vitrine-loja-desktop .slick-prev:before,
    #catalog-desktop .slick-prev:before {
      content: "";
      background: url("../assets/img/icone-seta-slider.svg") no-repeat center;
      background-size: auto;
      width: 60px;
      height: 60px;
      display: block; }
    #vitrine-loja-desktop .slick-next:before,
    #catalog-desktop .slick-next:before {
      content: "";
      background: url("../assets/img/icone-seta-slider-direita.svg") no-repeat center;
      background-size: auto;
      width: 60px;
      height: 60px;
      display: block; }

  .institucional-desktop img {
    width: auto;
    max-width: 100%;
    height: 350px; }
  .institucional-desktop a {
    color: #fff; }
    .institucional-desktop a:hover {
      color: #81C5FA; }
      .institucional-desktop a:hover span {
        color: #81C5FA; }
  .institucional-desktop span {
    position: absolute;
    left: 20px;
    bottom: 20px;
    text-transform: uppercase;
    color: #fff;
    font-size: 0.9em;
    letter-spacing: 3px; }
  .institucional-desktop .span-center {
    left: 36px; }
  .institucional-desktop .span-right {
    left: 40px; }

  .project-nossa-historia {
    background: url("../assets/img/desktop/banner-nossa-historia-alpha.jpg") no-repeat center bottom;
    background-size: cover;
    height: 800px; }
    .project-nossa-historia .project-hb-text {
      height: 800px;
      color: #071543; }
      .project-nossa-historia .project-hb-text h1 {
        margin-top: 0;
        line-height: 55px;
        font-size: 2.5em;
        letter-spacing: 20px;
        text-align: center; }

  .fontanario-emporio,
  .analise-qualidade {
    margin-top: 200px; }
    .fontanario-emporio h1,
    .analise-qualidade h1 {
      font-size: 1.7em;
      color: #071543;
      text-transform: uppercase;
      letter-spacing: 10px; }

  #fontanario-desktop .slick-prev,
  #fontanario-desktop .slick-next,
  #emporio-desktop .slick-prev,
  #emporio-desktop .slick-next {
    display: block;
    z-index: 2000;
    background-color: #071543;
    width: 60px;
    height: 40px;
    box-shadow: 6px 6px 14px -5px #333; }
    #fontanario-desktop .slick-prev:before,
    #fontanario-desktop .slick-next:before,
    #emporio-desktop .slick-prev:before,
    #emporio-desktop .slick-next:before {
      content: "";
      font-family: unset;
      display: block;
      width: 60px;
      height: 40px; }
  #fontanario-desktop .slick-next,
  #emporio-desktop .slick-next {
    right: -60px; }
    #fontanario-desktop .slick-next:before,
    #emporio-desktop .slick-next:before {
      background: url("../assets/img/icone-seta-direita-branca.svg") no-repeat center;
      background-size: 20px; }
  #fontanario-desktop .slick-prev,
  #emporio-desktop .slick-prev {
    left: unset;
    right: 0; }
    #fontanario-desktop .slick-prev:before,
    #emporio-desktop .slick-prev:before {
      background: url("../assets/img/icone-seta-esquerda-branca.svg") no-repeat center;
      background-size: 20px; }

  .project-private-label {
    background: url("../assets/img/desktop/ilustracao-private-label.jpg") no-repeat center bottom;
    background-size: cover;
    height: 800px; }
    .project-private-label .project-hb-text {
      height: 800px;
      color: #071543; }
      .project-private-label .project-hb-text h1 {
        margin-top: 0;
        line-height: 55px;
        font-size: 2.5em;
        letter-spacing: 20px;
        text-align: center; }
        .project-private-label .project-hb-text h1 span {
          display: none; }
        .project-private-label .project-hb-text h1 img {
          width: 370px;
          height: auto; }
    .project-private-label .diferenciais-private-label {
      font-size: 0.7em;
      letter-spacing: 0;
      padding: 18px;
      text-transform: uppercase; }

  .color-desktop {
    color: #888888;
    font-size: 0.85em; }
    .color-desktop a {
      color: #888888; }
      .color-desktop a:hover {
        color: #071543; }

  .analise-qualidade .color-desktop {
    font-size: 0.7em !important;
    line-height: 30px; }
  .analise-qualidade .project-content {
    padding: 0; }
  .analise-qualidade .project-ins-nav li {
    margin-bottom: 4px; }
  .analise-qualidade .missao-visao-valores {
    width: 100%;
    max-width: 620px;
    padding: 60px;
    margin: 0 auto; }
    .analise-qualidade .missao-visao-valores .color-desktop {
      font-size: 0.8em; }
  .analise-qualidade .project-visao-itens {
    padding: 0 0 0 40px;
    list-style: disc;
    list-style-type: disc;
    margin: 20px; }

  .project-summary {
    font-size: 0.6em; }

  .project-related {
    text-align: center; }
    .project-related h3 {
      padding: 10px 20px; }
    .project-related:before {
      width: 1000px !important;
      margin-top: 15px;
      left: 50%;
      margin-left: -500px; }

  /**
    * Botões
  */
  .project-btn-model-1 {
    background-color: transparent;
    border: 2px solid #071543;
    color: #071543;
    text-transform: uppercase;
    letter-spacing: 5px;
    display: inline-block;
    padding: 15px 50px;
    margin: 25px auto;
    border-radius: 6px; }
    .project-btn-model-1:hover {
      border-color: #81C5FA;
      color: #fff;
      background-color: #81C5FA; }
    .project-btn-model-1:active {
      border-color: #50aef8;
      color: #fff;
      background-color: #50aef8; }

  .project-btn-model-2 {
    background-color: #071543;
    border: none;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 5px;
    display: inline-block;
    padding: 15px 50px;
    border-radius: 6px; }
    .project-btn-model-2:hover {
      background-color: #0c2371;
      color: #fff; }
    .project-btn-model-2:active {
      background-color: #020715;
      color: #fff; }

  .project-adicionar-cesta {
    text-transform: uppercase;
    padding: 5px;
    border-radius: 2px !important;
    letter-spacing: 2px;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px; }

  .project-header-user .project-overlayer {
    margin-top: -30px; }

  /**
    * steps de cadastro
  */
  .project-bg-base-color {
    background-color: transparent;
    color: #071543; }

  .project-headers.project-headers-dark {
    color: #071543; }
    .project-headers.project-headers-dark h2.gs-toupper, .project-headers.project-headers-dark .project-footer h2.project-btn-news-footer, .project-footer .project-headers.project-headers-dark h2.project-btn-news-footer, .project-headers.project-headers-dark h2.project-btn-tabs, .project-headers.project-headers-dark h2.btn-model-6, .project-headers.project-headers-dark h2.btn-model-7, .project-headers.project-headers-dark h2.project-btn-highlight, .project-headers.project-headers-dark .project-loading h2.status, .project-loading .project-headers.project-headers-dark h2.status, .project-headers.project-headers-dark h2.project-alerts, .project-headers.project-headers-dark h2.project-btn-translucid, .project-headers.project-headers-dark .project-headers.project-basket h2, .project-headers.project-basket .project-headers.project-headers-dark h2, .project-headers.project-headers-dark .project-cupom-block h2.project-btn-cupom, .project-cupom-block .project-headers.project-headers-dark h2.project-btn-cupom, .project-headers.project-headers-dark h2.project-categories, .project-headers.project-headers-dark .project-header-user h2.project-btn-filters, .project-header-user .project-headers.project-headers-dark h2.project-btn-filters, .project-headers.project-headers-dark h2.btn-model-5, .project-headers.project-headers-dark h2.btn-model-9, .project-headers.project-headers-dark h2.btn-model-10 {
      color: #071543; }

  .options-container {
    min-height: 100vh;
    background: #fff !important;
    margin-top: 110px; }
    .options-container .header {
      padding-bottom: 0; }
      .options-container .header .icone img {
        height: 48px;
        max-width: 100%;
        margin: 0 auto;
        margin-bottom: 10px; }
      .options-container .header .title h1 {
        color: #071543;
        letter-spacing: 3px;
        font-size: 0.9em; }
      .options-container .header .title-complement p {
        font-size: 0.7em;
        width: 100%; }
    .options-container .project-btn, .options-container .project-footer .project-btn-news-footer, .project-footer .options-container .project-btn-news-footer, .options-container .project-btn-big, .options-container .project-adicionar-cesta, .options-container .project-btn-shaddow, .options-container .btn-model-5, .options-container .project-btn-tabs, .options-container .btn-model-6, .options-container .btn-model-7, .options-container .project-btn-filters, .options-container .project-btn-highlight, .options-container .project-loading .status, .project-loading .options-container .status, .options-container .project-alerts, .options-container .project-btn-translucid, .options-container .double-btn .btn-left,
    .options-container .double-btn .btn-right, .options-container .double-btn .btn-periodos,
    .options-container .double-btn .btn-dia-semana,
    .options-container .double-btn .btn-recorrencia-assinatura, .options-container .btn-model-8, .options-container .btn-model-9, .options-container .btn-model-10 {
      border-radius: 2px;
      background-color: #81C5FA;
      color: #fff;
      text-transform: uppercase; }
      .options-container .project-btn:hover, .options-container .project-footer .project-btn-news-footer:hover, .project-footer .options-container .project-btn-news-footer:hover, .options-container .project-btn-big:hover, .options-container .project-adicionar-cesta:hover, .options-container .project-btn-shaddow:hover, .options-container .btn-model-5:hover, .options-container .project-btn-tabs:hover, .options-container .btn-model-6:hover, .options-container .btn-model-7:hover, .options-container .project-btn-filters:hover, .options-container .project-btn-highlight:hover, .options-container .project-loading .status:hover, .project-loading .options-container .status:hover, .options-container .project-alerts:hover, .options-container .project-btn-translucid:hover, .options-container .double-btn .btn-left:hover,
      .options-container .double-btn .btn-right:hover, .options-container .double-btn .btn-periodos:hover,
      .options-container .double-btn .btn-dia-semana:hover,
      .options-container .double-btn .btn-recorrencia-assinatura:hover, .options-container .btn-model-8:hover, .options-container .btn-model-9:hover, .options-container .btn-model-10:hover {
        background-color: #50aef8;
        color: #fff; }
    .options-container .add-telefone,
    .options-container .add-email {
      text-transform: uppercase;
      background-color: #071543;
      color: #fff;
      border-radius: 2px;
      letter-spacing: 3px;
      font-size: 0.7em; }
      .options-container .add-telefone:hover,
      .options-container .add-email:hover {
        background-color: #0c2371;
        color: #fff; }
    .options-container .btn-model-2 {
      float: left;
      background: transparent;
      border: 2px solid #071543;
      color: #071543;
      border-radius: 2px;
      width: calc(50% - 10px);
      box-sizing: border-box;
      font-size: 0.8em;
      padding: 12px; }
      .options-container .btn-model-2:hover {
        border: 2px solid #81C5FA;
        color: #81C5FA; }
    .options-container .btn-model-2:nth-child(2) {
      margin-left: 10px; }
    .options-container .project-fspacing label {
      color: #696969; }
    .options-container .project-fspacing input,
    .options-container .project-fspacing select,
    .options-container .project-fspacing option {
      border-color: #696969;
      color: #000; }
    .options-container .project-fspacing select,
    .options-container .project-fspacing option {
      font-size: 0.9em;
      height: 40px; }
    .options-container .double-btn .btn-left,
    .options-container .double-btn .btn-right {
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 0.7em; }
    .options-container .double-btn .btn-left {
      background: transparent url("../assets/img/icone-seta-esquerda-cinza.svg") no-repeat 10px center;
      background-size: 18px;
      border: 2px solid #ccc;
      color: #ccc; }
      .options-container .double-btn .btn-left:hover {
        background: transparent url("../assets/img/icone-seta-esquerda-cinza-hover.svg") no-repeat 10px center;
        background-size: 18px;
        border-color: #696969;
        color: #696969; }
    .options-container .double-btn .btn-right {
      background-color: #61C835;
      background-size: 18px;
      border: 2px solid #61C835;
      color: #fff; }
      .options-container .double-btn .btn-right:hover {
        background-color: #80d45c;
        background-size: 18px;
        border-color: #80d45c;
        color: #fff; }
    .options-container .double-btn .small-label-periodos-checkout {
      font-size: 0.8em; }
    .options-container .double-btn .small-periodos-checkout {
      font-size: 0.7em; }
    .options-container .btn-login-screen {
      background-color: #61C835;
      border: 2px solid #61C835;
      color: #fff; }
      .options-container .btn-login-screen:hover {
        background-color: #80d45c;
        border-color: #80d45c;
        color: #fff; }
    .options-container #desktop-alert {
      background-color: transparent;
      border-color: #F02B39;
      color: #F02B39; }
      .options-container #desktop-alert:hover {
        background-color: transparent;
        border-color: #F02B39;
        color: #F02B39; }
    .options-container form label {
      color: #707070; }
    .options-container form input {
      color: #000;
      border-color: #707070; }

  .header-user {
    margin-top: 110px; }
    .header-user:before {
      content: "";
      background-color: #071543;
      position: absolute;
      height: 150px;
      width: 100%;
      left: 0; }
    .header-user.project-max-width {
      width: 100%;
      max-width: 650px; }
    .header-user .project-push-alerts {
      position: relative;
      background: #fff;
      top: 25px;
      width: calc(80% - 10px);
      margin: 0 auto;
      padding: 1px 5px; }
    .header-user .gs-form .project-container {
      width: 80%;
      margin: 0 auto; }
    .header-user .desktop-no-float .gs-coluna-12 {
      position: absolute;
      left: 25px;
      margin-top: 44px; }
      .header-user .desktop-no-float .gs-coluna-12 img {
        margin-top: 5px !important; }
    .header-user .desktop-no-float .gs-coluna-6 {
      width: 100%;
      float: none; }
      .header-user .desktop-no-float .gs-coluna-6 h2 {
        color: #fff;
        text-align: center;
        margin-top: -20px; }
      .header-user .desktop-no-float .gs-coluna-6.gs-right {
        text-align: center;
        padding: 25px; }
        .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-footer .project-btn-news-footer, .project-footer .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-news-footer, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-big, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-adicionar-cesta, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-shaddow, .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-model-5, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-tabs, .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-model-6, .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-model-7, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-filters, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-highlight, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-loading .status, .project-loading .header-user .desktop-no-float .gs-coluna-6.gs-right .status, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-alerts, .header-user .desktop-no-float .gs-coluna-6.gs-right .project-btn-translucid, .header-user .desktop-no-float .gs-coluna-6.gs-right .options-container .double-btn .btn-left, .options-container .double-btn .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-left,
        .header-user .desktop-no-float .gs-coluna-6.gs-right .options-container .double-btn .btn-right,
        .options-container .double-btn .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-right, .header-user .desktop-no-float .gs-coluna-6.gs-right .options-container .double-btn .btn-periodos, .options-container .double-btn .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-periodos,
        .header-user .desktop-no-float .gs-coluna-6.gs-right .options-container .double-btn .btn-dia-semana,
        .options-container .double-btn .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-dia-semana,
        .header-user .desktop-no-float .gs-coluna-6.gs-right .options-container .double-btn .btn-recorrencia-assinatura,
        .options-container .double-btn .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-recorrencia-assinatura, .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-model-8, .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-model-9, .header-user .desktop-no-float .gs-coluna-6.gs-right .btn-model-10 {
          border-radius: 2px;
          padding: 10px 30px;
          letter-spacing: 2px; }
    .header-user .btn-model-3 {
      padding: 13px 20px;
      border-radius: 2px;
      font-size: 0.7em; }
      .header-user .btn-model-3:hover {
        background-color: #0c2371;
        color: #fff; }
    .header-user .btn-model-4 {
      padding: 13px 20px;
      border-radius: 2px;
      font-size: 0.7em; }
    .header-user img[src="../assets/img/icone-itens-na-cesta.svg"] {
      margin-top: 50px; }

  .data-list-desktop {
    font-size: 0.9em; }
    .data-list-desktop small {
      font-size: 0.7em;
      display: block; }
    .data-list-desktop article li:hover,
    .data-list-desktop a:hover {
      background-color: #9ad0fb; }
    .data-list-desktop .bigger-padding {
      padding: 15px; }

  .data-entrega-icon {
    float: right;
    background: url("../assets/img/icone-calendario-cinza.svg") no-repeat center left;
    padding: 5px 10px 5px 30px;
    font-size: 0.7em; }

  .desktop-assinaturas-status {
    font-size: 0.6em;
    padding: 4px;
    border: 1px solid #ccc;
    border-radius: 6px; }

  .project-footer .project-bg-base-color {
    background-color: #071543; }

  .gs-coluna-inset-05 {
    width: calc( ( 8.3333333333% * 6 ) - 4.1666666667% );
    margin-left: 4.1666666667%; }

  .filtrar-title {
    color: #071543;
    display: inline-block;
    text-transform: uppercase;
    margin: 0 0 25px auto;
    background: url(../assets/img/icone-filtrar-funil.svg) no-repeat center left;
    background-size: 20px auto;
    padding: 8px 0 8px 29px;
    font-size: 0.8em; }

  .push-alerts-v2 {
    display: block;
    position: static; }
    .push-alerts-v2:before {
      content: "";
      display: block;
      border-bottom: 1px solid #ccc;
      position: absolute;
      left: 0;
      width: 100%;
      margin-top: 30px; }
    .push-alerts-v2 .project-push-alerts {
      top: 0; }

  #vitrine-loja-desktop .gs-product-grid a:hover figure img {
    border-color: transparent; }

  .photo-thumb {
    padding: 10px 0; }

  .btn-azul-padrao {
    text-transform: uppercase;
    background-color: #071543;
    color: #fff;
    border-radius: 2px;
    letter-spacing: 3px;
    font-size: 0.7em;
    display: block;
    padding: 15px;
    text-align: center;
    width: 440px;
    margin: 0 auto; }
    .btn-azul-padrao:hover {
      background-color: #0c2371;
      color: #fff; }

  .btn-complementar-padrao {
    text-transform: uppercase;
    background-color: #81C5FA;
    color: #fff;
    border-radius: 2px;
    letter-spacing: 3px;
    font-size: 0.7em;
    display: block;
    padding: 15px;
    text-align: center;
    width: 440px;
    margin: 0 auto; }
    .btn-complementar-padrao:hover {
      background-color: #8bcafa;
      color: #fff; }

  .btn-meus-dados-header {
    border: 2px solid #071543;
    color: #071543;
    padding: 10px 15px;
    margin: 0 auto 50px auto;
    display: inline-block;
    border-radius: 4px;
    text-transform: uppercase;
    font-size: 0.8em;
    letter-spacing: 3px; }
    .btn-meus-dados-header:hover {
      border-color: #81C5FA;
      color: #81C5FA; }

  .btn-filtros {
    background-color: transparent;
    border: 1px solid rgba(62, 62, 62, 0.3);
    color: rgba(62, 62, 62, 0.6);
    padding: 12px 17px;
    border-radius: 2px;
    display: block;
    text-align: center;
    font-size: 0.7em;
    margin: 0 2% 5px 2%; }
    .btn-filtros:hover {
      background-color: transparent;
      border: 1px solid #071543;
      color: #071543; }
    .btn-filtros.btn-filtros-active {
      border-color: #071543;
      background-color: #071543;
      color: #81C5FA; }

  .btn-change-qtd {
    padding: 10px 0 12px 0;
    display: block;
    border: none;
    background: #071543;
    color: #fff;
    font-size: 2em;
    width: 100%;
    text-align: center;
    cursor: pointer; }
    .btn-change-qtd:hover {
      background-color: #0c2371; }
    .btn-change-qtd.qtd-left {
      border-top-left-radius: 2px;
      border-bottom-left-radius: 2px; }
    .btn-change-qtd.qtd-right {
      border-top-right-radius: 2px;
      border-bottom-right-radius: 2px; }

  div[data-slick-index="5"] .title-complement {
    font-size: 0.8em; }

  .cart-imagem {
    display: block;
    text-align: center;
    margin-bottom: 40px; }
    .cart-imagem img {
      width: auto;
      max-width: 100%;
      height: auto;
      max-height: 100px;
      margin: 0 auto; }

  #cart-header {
    display: none; }

  /**
    * Cart
  */
  #summary-desktop .buy-actions input[type="number"] {
    width: 48px !important;
    text-align: center;
    margin: 0;
    padding-left: 0;
    padding-right: 0;
    border: 1px solid #071543;
    background: #fff;
    padding: 10px 0; }
  #summary-desktop .btn-model-8 {
    background-color: #61C835 !important;
    color: #fff !important; }
    #summary-desktop .btn-model-8:hover {
      background-color: #80d45c !important;
      color: #fff !important; }
  #summary-desktop .project-data-list .gs-fsmall.gs-center, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-fsmall.gs-pg-summary, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-fsmall.gs-pg-summary, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-coluna-6 .gs-pg-summary.gs-pg-container, .gs-product-grid .gs-pg-container .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-summary.gs-pg-container, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container .gs-pg-summary.gs-pg-container, .gs-product-grid .gs-coluna-6 .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.gs-pg-container, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .project-forms label.gs-pg-summary, .gs-product-grid .gs-pg-container .project-forms #summary-desktop .project-data-list label.gs-pg-summary, #summary-desktop .project-data-list .project-forms .gs-product-grid .gs-pg-container label.gs-pg-summary, .project-forms .gs-product-grid .gs-pg-container #summary-desktop .project-data-list label.gs-pg-summary, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .project-footer .gs-pg-summary.project-btn-news-footer, .gs-product-grid .gs-pg-container .project-footer #summary-desktop .project-data-list .gs-pg-summary.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-news-footer, .project-footer .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-news-footer, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-big, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-big, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-adicionar-cesta, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-adicionar-cesta, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-shaddow, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-shaddow, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.btn-model-5, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-model-5, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-tabs, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-tabs, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.btn-model-6, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-model-6, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.btn-model-7, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-model-7, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-filters, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-filters, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-highlight, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-highlight, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .project-loading .gs-pg-summary.status, .gs-product-grid .gs-pg-container .project-loading #summary-desktop .project-data-list .gs-pg-summary.status, #summary-desktop .project-data-list .project-loading .gs-product-grid .gs-pg-container .gs-pg-summary.status, .project-loading .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.status, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-alerts, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-alerts, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-btn-translucid, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-btn-translucid, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .options-container .double-btn .gs-pg-summary.btn-left, .gs-product-grid .gs-pg-container .options-container .double-btn #summary-desktop .project-data-list .gs-pg-summary.btn-left, #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-pg-container .gs-pg-summary.btn-left, .options-container .double-btn .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-left,
  #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .options-container .double-btn .gs-pg-summary.btn-right,
  .gs-product-grid .gs-pg-container .options-container .double-btn #summary-desktop .project-data-list .gs-pg-summary.btn-right,
  #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-pg-container .gs-pg-summary.btn-right,
  .options-container .double-btn .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-right, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .options-container .double-btn .gs-pg-summary.btn-periodos, .gs-product-grid .gs-pg-container .options-container .double-btn #summary-desktop .project-data-list .gs-pg-summary.btn-periodos, #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-pg-container .gs-pg-summary.btn-periodos, .options-container .double-btn .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-periodos,
  #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .options-container .double-btn .gs-pg-summary.btn-dia-semana,
  .gs-product-grid .gs-pg-container .options-container .double-btn #summary-desktop .project-data-list .gs-pg-summary.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-pg-container .gs-pg-summary.btn-dia-semana,
  .options-container .double-btn .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-dia-semana,
  #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .options-container .double-btn .gs-pg-summary.btn-recorrencia-assinatura,
  .gs-product-grid .gs-pg-container .options-container .double-btn #summary-desktop .project-data-list .gs-pg-summary.btn-recorrencia-assinatura,
  #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-pg-container .gs-pg-summary.btn-recorrencia-assinatura,
  .options-container .double-btn .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-recorrencia-assinatura, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.btn-model-8, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-model-8, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.btn-model-9, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-model-9, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.btn-model-10, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.btn-model-10, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .project-related h3.gs-pg-summary, .gs-product-grid .gs-pg-container .project-related #summary-desktop .project-data-list h3.gs-pg-summary, #summary-desktop .project-data-list .project-related .gs-product-grid .gs-pg-container h3.gs-pg-summary, .project-related .gs-product-grid .gs-pg-container #summary-desktop .project-data-list h3.gs-pg-summary, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .gs-pg-summary.project-summary, .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-summary, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .project-institucional .gs-pg-summary.project-content, .gs-product-grid .gs-pg-container .project-institucional #summary-desktop .project-data-list .gs-pg-summary.project-content, #summary-desktop .project-data-list .project-institucional .gs-product-grid .gs-pg-container .gs-pg-summary.project-content, .project-institucional .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.project-content, #summary-desktop .project-data-list .gs-product-grid .gs-pg-container .project-loading .gs-pg-summary.messages, .gs-product-grid .gs-pg-container .project-loading #summary-desktop .project-data-list .gs-pg-summary.messages, #summary-desktop .project-data-list .project-loading .gs-product-grid .gs-pg-container .gs-pg-summary.messages, .project-loading .gs-product-grid .gs-pg-container #summary-desktop .project-data-list .gs-pg-summary.messages, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-center.gs-pg-container, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-center.gs-pg-container, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .project-footer .gs-pg-container.project-btn-news-footer, .gs-product-grid .gs-coluna-6 .project-footer #summary-desktop .project-data-list .gs-pg-container.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-news-footer, .project-footer .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-news-footer, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-big, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-big, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-adicionar-cesta, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-adicionar-cesta, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-shaddow, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-shaddow, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-model-5, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-model-5, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-tabs, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-tabs, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-model-6, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-model-6, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-model-7, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-model-7, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-filters, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-filters, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-highlight, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-highlight, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .project-loading .gs-pg-container.status, .gs-product-grid .gs-coluna-6 .project-loading #summary-desktop .project-data-list .gs-pg-container.status, #summary-desktop .project-data-list .project-loading .gs-product-grid .gs-coluna-6 .gs-pg-container.status, .project-loading .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.status, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-alerts, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-alerts, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-btn-translucid, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-btn-translucid, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .options-container .double-btn .gs-pg-container.btn-left, .gs-product-grid .gs-coluna-6 .options-container .double-btn #summary-desktop .project-data-list .gs-pg-container.btn-left, #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-left, .options-container .double-btn .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-left,
  #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .options-container .double-btn .gs-pg-container.btn-right,
  .gs-product-grid .gs-coluna-6 .options-container .double-btn #summary-desktop .project-data-list .gs-pg-container.btn-right,
  #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-right,
  .options-container .double-btn .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-right, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .options-container .double-btn .gs-pg-container.btn-periodos, .gs-product-grid .gs-coluna-6 .options-container .double-btn #summary-desktop .project-data-list .gs-pg-container.btn-periodos, #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-periodos, .options-container .double-btn .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-periodos,
  #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .options-container .double-btn .gs-pg-container.btn-dia-semana,
  .gs-product-grid .gs-coluna-6 .options-container .double-btn #summary-desktop .project-data-list .gs-pg-container.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-dia-semana,
  .options-container .double-btn .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-dia-semana,
  #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .options-container .double-btn .gs-pg-container.btn-recorrencia-assinatura,
  .gs-product-grid .gs-coluna-6 .options-container .double-btn #summary-desktop .project-data-list .gs-pg-container.btn-recorrencia-assinatura,
  #summary-desktop .project-data-list .options-container .double-btn .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-recorrencia-assinatura,
  .options-container .double-btn .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-recorrencia-assinatura, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-model-8, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-model-8, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-model-9, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-model-9, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.btn-model-10, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.btn-model-10, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .gs-pg-container.project-floating-bubble, .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.project-floating-bubble, #summary-desktop .project-data-list .gs-product-grid .gs-coluna-6 .options-container .gs-pg-container.header, .gs-product-grid .gs-coluna-6 .options-container #summary-desktop .project-data-list .gs-pg-container.header, #summary-desktop .project-data-list .options-container .gs-product-grid .gs-coluna-6 .gs-pg-container.header, .options-container .gs-product-grid .gs-coluna-6 #summary-desktop .project-data-list .gs-pg-container.header, #summary-desktop .project-data-list .project-forms label.gs-center, .project-forms #summary-desktop .project-data-list label.gs-center, #summary-desktop .project-data-list .project-forms label.project-btn, .project-forms #summary-desktop .project-data-list label.project-btn, #summary-desktop .project-data-list .project-forms .project-footer label.project-btn-news-footer, .project-forms .project-footer #summary-desktop .project-data-list label.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .project-forms label.project-btn-news-footer, .project-footer .project-forms #summary-desktop .project-data-list label.project-btn-news-footer, #summary-desktop .project-data-list .project-forms label.project-btn-big, .project-forms #summary-desktop .project-data-list label.project-btn-big, #summary-desktop .project-data-list .project-forms label.project-adicionar-cesta, .project-forms #summary-desktop .project-data-list label.project-adicionar-cesta, #summary-desktop .project-data-list .project-forms label.project-btn-shaddow, .project-forms #summary-desktop .project-data-list label.project-btn-shaddow, #summary-desktop .project-data-list .project-forms label.btn-model-5, .project-forms #summary-desktop .project-data-list label.btn-model-5, #summary-desktop .project-data-list .project-forms label.project-btn-tabs, .project-forms #summary-desktop .project-data-list label.project-btn-tabs, #summary-desktop .project-data-list .project-forms label.btn-model-6, .project-forms #summary-desktop .project-data-list label.btn-model-6, #summary-desktop .project-data-list .project-forms label.btn-model-7, .project-forms #summary-desktop .project-data-list label.btn-model-7, #summary-desktop .project-data-list .project-forms label.project-btn-filters, .project-forms #summary-desktop .project-data-list label.project-btn-filters, #summary-desktop .project-data-list .project-forms label.project-btn-highlight, .project-forms #summary-desktop .project-data-list label.project-btn-highlight, #summary-desktop .project-data-list .project-forms .project-loading label.status, .project-forms .project-loading #summary-desktop .project-data-list label.status, #summary-desktop .project-data-list .project-loading .project-forms label.status, .project-loading .project-forms #summary-desktop .project-data-list label.status, #summary-desktop .project-data-list .project-forms label.project-alerts, .project-forms #summary-desktop .project-data-list label.project-alerts, #summary-desktop .project-data-list .project-forms label.project-btn-translucid, .project-forms #summary-desktop .project-data-list label.project-btn-translucid, #summary-desktop .project-data-list .project-forms .options-container .double-btn label.btn-left, .project-forms .options-container .double-btn #summary-desktop .project-data-list label.btn-left, #summary-desktop .project-data-list .options-container .double-btn .project-forms label.btn-left, .options-container .double-btn .project-forms #summary-desktop .project-data-list label.btn-left,
  #summary-desktop .project-data-list .project-forms .options-container .double-btn label.btn-right,
  .project-forms .options-container .double-btn #summary-desktop .project-data-list label.btn-right,
  #summary-desktop .project-data-list .options-container .double-btn .project-forms label.btn-right,
  .options-container .double-btn .project-forms #summary-desktop .project-data-list label.btn-right, #summary-desktop .project-data-list .project-forms .options-container .double-btn label.btn-periodos, .project-forms .options-container .double-btn #summary-desktop .project-data-list label.btn-periodos, #summary-desktop .project-data-list .options-container .double-btn .project-forms label.btn-periodos, .options-container .double-btn .project-forms #summary-desktop .project-data-list label.btn-periodos,
  #summary-desktop .project-data-list .project-forms .options-container .double-btn label.btn-dia-semana,
  .project-forms .options-container .double-btn #summary-desktop .project-data-list label.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .project-forms label.btn-dia-semana,
  .options-container .double-btn .project-forms #summary-desktop .project-data-list label.btn-dia-semana,
  #summary-desktop .project-data-list .project-forms .options-container .double-btn label.btn-recorrencia-assinatura,
  .project-forms .options-container .double-btn #summary-desktop .project-data-list label.btn-recorrencia-assinatura,
  #summary-desktop .project-data-list .options-container .double-btn .project-forms label.btn-recorrencia-assinatura,
  .options-container .double-btn .project-forms #summary-desktop .project-data-list label.btn-recorrencia-assinatura, #summary-desktop .project-data-list .project-forms label.btn-model-8, .project-forms #summary-desktop .project-data-list label.btn-model-8, #summary-desktop .project-data-list .project-forms label.btn-model-9, .project-forms #summary-desktop .project-data-list label.btn-model-9, #summary-desktop .project-data-list .project-forms label.btn-model-10, .project-forms #summary-desktop .project-data-list label.btn-model-10, #summary-desktop .project-data-list .project-forms label.project-floating-bubble, .project-forms #summary-desktop .project-data-list label.project-floating-bubble, #summary-desktop .project-data-list .project-forms .options-container label.header, .project-forms .options-container #summary-desktop .project-data-list label.header, #summary-desktop .project-data-list .options-container .project-forms label.header, .options-container .project-forms #summary-desktop .project-data-list label.header, #summary-desktop .project-data-list .project-btn, #summary-desktop .project-data-list .project-footer .project-btn-news-footer, .project-footer #summary-desktop .project-data-list .project-btn-news-footer, #summary-desktop .project-data-list .project-btn-big, #summary-desktop .project-data-list .project-adicionar-cesta, #summary-desktop .project-data-list .project-btn-shaddow, #summary-desktop .project-data-list .btn-model-5, #summary-desktop .project-data-list .project-btn-tabs, #summary-desktop .project-data-list .btn-model-6, #summary-desktop .project-data-list .btn-model-7, #summary-desktop .project-data-list .project-btn-filters, #summary-desktop .project-data-list .project-btn-highlight, #summary-desktop .project-data-list .project-loading .status, .project-loading #summary-desktop .project-data-list .status, #summary-desktop .project-data-list .project-alerts, #summary-desktop .project-data-list .project-btn-translucid, #summary-desktop .project-data-list .options-container .double-btn .btn-left, .options-container .double-btn #summary-desktop .project-data-list .btn-left,
  #summary-desktop .project-data-list .options-container .double-btn .btn-right,
  .options-container .double-btn #summary-desktop .project-data-list .btn-right, #summary-desktop .project-data-list .options-container .double-btn .btn-periodos, .options-container .double-btn #summary-desktop .project-data-list .btn-periodos,
  #summary-desktop .project-data-list .options-container .double-btn .btn-dia-semana,
  .options-container .double-btn #summary-desktop .project-data-list .btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .btn-recorrencia-assinatura,
  .options-container .double-btn #summary-desktop .project-data-list .btn-recorrencia-assinatura, #summary-desktop .project-data-list .btn-model-8, #summary-desktop .project-data-list .btn-model-9, #summary-desktop .project-data-list .btn-model-10, #summary-desktop .project-data-list .gs-fsmall.project-floating-bubble, #summary-desktop .project-data-list .project-floating-bubble.project-btn, #summary-desktop .project-data-list .project-footer .project-floating-bubble.project-btn-news-footer, .project-footer #summary-desktop .project-data-list .project-floating-bubble.project-btn-news-footer, #summary-desktop .project-data-list .project-floating-bubble.project-btn-big, #summary-desktop .project-data-list .project-floating-bubble.project-adicionar-cesta, #summary-desktop .project-data-list .project-floating-bubble.project-btn-shaddow, #summary-desktop .project-data-list .project-floating-bubble.btn-model-5, #summary-desktop .project-data-list .project-floating-bubble.project-btn-tabs, #summary-desktop .project-data-list .project-floating-bubble.btn-model-6, #summary-desktop .project-data-list .project-floating-bubble.btn-model-7, #summary-desktop .project-data-list .project-floating-bubble.project-btn-filters, #summary-desktop .project-data-list .project-floating-bubble.project-btn-highlight, #summary-desktop .project-data-list .project-loading .project-floating-bubble.status, .project-loading #summary-desktop .project-data-list .project-floating-bubble.status, #summary-desktop .project-data-list .project-floating-bubble.project-alerts, #summary-desktop .project-data-list .project-floating-bubble.project-btn-translucid, #summary-desktop .project-data-list .options-container .double-btn .project-floating-bubble.btn-left, .options-container .double-btn #summary-desktop .project-data-list .project-floating-bubble.btn-left,
  #summary-desktop .project-data-list .options-container .double-btn .project-floating-bubble.btn-right,
  .options-container .double-btn #summary-desktop .project-data-list .project-floating-bubble.btn-right, #summary-desktop .project-data-list .options-container .double-btn .project-floating-bubble.btn-periodos, .options-container .double-btn #summary-desktop .project-data-list .project-floating-bubble.btn-periodos,
  #summary-desktop .project-data-list .options-container .double-btn .project-floating-bubble.btn-dia-semana,
  .options-container .double-btn #summary-desktop .project-data-list .project-floating-bubble.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .project-floating-bubble.btn-recorrencia-assinatura,
  .options-container .double-btn #summary-desktop .project-data-list .project-floating-bubble.btn-recorrencia-assinatura, #summary-desktop .project-data-list .project-floating-bubble.btn-model-8, #summary-desktop .project-data-list .project-floating-bubble.btn-model-9, #summary-desktop .project-data-list .project-floating-bubble.btn-model-10, #summary-desktop .project-data-list .project-related h3.project-floating-bubble, .project-related #summary-desktop .project-data-list h3.project-floating-bubble, #summary-desktop .project-data-list .project-floating-bubble.project-summary, #summary-desktop .project-data-list .project-institucional .project-floating-bubble.project-content, .project-institucional #summary-desktop .project-data-list .project-floating-bubble.project-content, #summary-desktop .project-data-list .project-loading .project-floating-bubble.messages, .project-loading #summary-desktop .project-data-list .project-floating-bubble.messages, #summary-desktop .project-data-list .project-related h3.gs-center, .project-related #summary-desktop .project-data-list h3.gs-center, #summary-desktop .project-data-list .project-related h3.project-btn, .project-related #summary-desktop .project-data-list h3.project-btn, #summary-desktop .project-data-list .project-related .project-footer h3.project-btn-news-footer, .project-related .project-footer #summary-desktop .project-data-list h3.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .project-related h3.project-btn-news-footer, .project-footer .project-related #summary-desktop .project-data-list h3.project-btn-news-footer, #summary-desktop .project-data-list .project-related h3.project-btn-big, .project-related #summary-desktop .project-data-list h3.project-btn-big, #summary-desktop .project-data-list .project-related h3.project-adicionar-cesta, .project-related #summary-desktop .project-data-list h3.project-adicionar-cesta, #summary-desktop .project-data-list .project-related h3.project-btn-shaddow, .project-related #summary-desktop .project-data-list h3.project-btn-shaddow, #summary-desktop .project-data-list .project-related h3.btn-model-5, .project-related #summary-desktop .project-data-list h3.btn-model-5, #summary-desktop .project-data-list .project-related h3.project-btn-tabs, .project-related #summary-desktop .project-data-list h3.project-btn-tabs, #summary-desktop .project-data-list .project-related h3.btn-model-6, .project-related #summary-desktop .project-data-list h3.btn-model-6, #summary-desktop .project-data-list .project-related h3.btn-model-7, .project-related #summary-desktop .project-data-list h3.btn-model-7, #summary-desktop .project-data-list .project-related h3.project-btn-filters, .project-related #summary-desktop .project-data-list h3.project-btn-filters, #summary-desktop .project-data-list .project-related h3.project-btn-highlight, .project-related #summary-desktop .project-data-list h3.project-btn-highlight, #summary-desktop .project-data-list .project-related .project-loading h3.status, .project-related .project-loading #summary-desktop .project-data-list h3.status, #summary-desktop .project-data-list .project-loading .project-related h3.status, .project-loading .project-related #summary-desktop .project-data-list h3.status, #summary-desktop .project-data-list .project-related h3.project-alerts, .project-related #summary-desktop .project-data-list h3.project-alerts, #summary-desktop .project-data-list .project-related h3.project-btn-translucid, .project-related #summary-desktop .project-data-list h3.project-btn-translucid, #summary-desktop .project-data-list .project-related .options-container .double-btn h3.btn-left, .project-related .options-container .double-btn #summary-desktop .project-data-list h3.btn-left, #summary-desktop .project-data-list .options-container .double-btn .project-related h3.btn-left, .options-container .double-btn .project-related #summary-desktop .project-data-list h3.btn-left,
  #summary-desktop .project-data-list .project-related .options-container .double-btn h3.btn-right,
  .project-related .options-container .double-btn #summary-desktop .project-data-list h3.btn-right,
  #summary-desktop .project-data-list .options-container .double-btn .project-related h3.btn-right,
  .options-container .double-btn .project-related #summary-desktop .project-data-list h3.btn-right, #summary-desktop .project-data-list .project-related .options-container .double-btn h3.btn-periodos, .project-related .options-container .double-btn #summary-desktop .project-data-list h3.btn-periodos, #summary-desktop .project-data-list .options-container .double-btn .project-related h3.btn-periodos, .options-container .double-btn .project-related #summary-desktop .project-data-list h3.btn-periodos,
  #summary-desktop .project-data-list .project-related .options-container .double-btn h3.btn-dia-semana,
  .project-related .options-container .double-btn #summary-desktop .project-data-list h3.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .project-related h3.btn-dia-semana,
  .options-container .double-btn .project-related #summary-desktop .project-data-list h3.btn-dia-semana,
  #summary-desktop .project-data-list .project-related .options-container .double-btn h3.btn-recorrencia-assinatura,
  .project-related .options-container .double-btn #summary-desktop .project-data-list h3.btn-recorrencia-assinatura,
  #summary-desktop .project-data-list .options-container .double-btn .project-related h3.btn-recorrencia-assinatura,
  .options-container .double-btn .project-related #summary-desktop .project-data-list h3.btn-recorrencia-assinatura, #summary-desktop .project-data-list .project-related h3.btn-model-8, .project-related #summary-desktop .project-data-list h3.btn-model-8, #summary-desktop .project-data-list .project-related h3.btn-model-9, .project-related #summary-desktop .project-data-list h3.btn-model-9, #summary-desktop .project-data-list .project-related h3.btn-model-10, .project-related #summary-desktop .project-data-list h3.btn-model-10, #summary-desktop .project-data-list .project-related .options-container h3.header, .project-related .options-container #summary-desktop .project-data-list h3.header, #summary-desktop .project-data-list .options-container .project-related h3.header, .options-container .project-related #summary-desktop .project-data-list h3.header, #summary-desktop .project-data-list .gs-center.project-summary, #summary-desktop .project-data-list .project-summary.project-btn, #summary-desktop .project-data-list .project-footer .project-summary.project-btn-news-footer, .project-footer #summary-desktop .project-data-list .project-summary.project-btn-news-footer, #summary-desktop .project-data-list .project-summary.project-btn-big, #summary-desktop .project-data-list .project-summary.project-adicionar-cesta, #summary-desktop .project-data-list .project-summary.project-btn-shaddow, #summary-desktop .project-data-list .project-summary.btn-model-5, #summary-desktop .project-data-list .project-summary.project-btn-tabs, #summary-desktop .project-data-list .project-summary.btn-model-6, #summary-desktop .project-data-list .project-summary.btn-model-7, #summary-desktop .project-data-list .project-summary.project-btn-filters, #summary-desktop .project-data-list .project-summary.project-btn-highlight, #summary-desktop .project-data-list .project-loading .project-summary.status, .project-loading #summary-desktop .project-data-list .project-summary.status, #summary-desktop .project-data-list .project-summary.project-alerts, #summary-desktop .project-data-list .project-summary.project-btn-translucid, #summary-desktop .project-data-list .options-container .double-btn .project-summary.btn-left, .options-container .double-btn #summary-desktop .project-data-list .project-summary.btn-left,
  #summary-desktop .project-data-list .options-container .double-btn .project-summary.btn-right,
  .options-container .double-btn #summary-desktop .project-data-list .project-summary.btn-right, #summary-desktop .project-data-list .options-container .double-btn .project-summary.btn-periodos, .options-container .double-btn #summary-desktop .project-data-list .project-summary.btn-periodos,
  #summary-desktop .project-data-list .options-container .double-btn .project-summary.btn-dia-semana,
  .options-container .double-btn #summary-desktop .project-data-list .project-summary.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .project-summary.btn-recorrencia-assinatura,
  .options-container .double-btn #summary-desktop .project-data-list .project-summary.btn-recorrencia-assinatura, #summary-desktop .project-data-list .project-summary.btn-model-8, #summary-desktop .project-data-list .project-summary.btn-model-9, #summary-desktop .project-data-list .project-summary.btn-model-10, #summary-desktop .project-data-list .options-container .project-summary.header, .options-container #summary-desktop .project-data-list .project-summary.header, #summary-desktop .project-data-list .project-institucional .gs-center.project-content, .project-institucional #summary-desktop .project-data-list .gs-center.project-content, #summary-desktop .project-data-list .project-institucional .project-content.project-btn, .project-institucional #summary-desktop .project-data-list .project-content.project-btn, #summary-desktop .project-data-list .project-institucional .project-footer .project-content.project-btn-news-footer, .project-institucional .project-footer #summary-desktop .project-data-list .project-content.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .project-institucional .project-content.project-btn-news-footer, .project-footer .project-institucional #summary-desktop .project-data-list .project-content.project-btn-news-footer, #summary-desktop .project-data-list .project-institucional .project-content.project-btn-big, .project-institucional #summary-desktop .project-data-list .project-content.project-btn-big, #summary-desktop .project-data-list .project-institucional .project-content.project-adicionar-cesta, .project-institucional #summary-desktop .project-data-list .project-content.project-adicionar-cesta, #summary-desktop .project-data-list .project-institucional .project-content.project-btn-shaddow, .project-institucional #summary-desktop .project-data-list .project-content.project-btn-shaddow, #summary-desktop .project-data-list .project-institucional .project-content.btn-model-5, .project-institucional #summary-desktop .project-data-list .project-content.btn-model-5, #summary-desktop .project-data-list .project-institucional .project-content.project-btn-tabs, .project-institucional #summary-desktop .project-data-list .project-content.project-btn-tabs, #summary-desktop .project-data-list .project-institucional .project-content.btn-model-6, .project-institucional #summary-desktop .project-data-list .project-content.btn-model-6, #summary-desktop .project-data-list .project-institucional .project-content.btn-model-7, .project-institucional #summary-desktop .project-data-list .project-content.btn-model-7, #summary-desktop .project-data-list .project-institucional .project-content.project-btn-filters, .project-institucional #summary-desktop .project-data-list .project-content.project-btn-filters, #summary-desktop .project-data-list .project-institucional .project-content.project-btn-highlight, .project-institucional #summary-desktop .project-data-list .project-content.project-btn-highlight, #summary-desktop .project-data-list .project-institucional .project-loading .project-content.status, .project-institucional .project-loading #summary-desktop .project-data-list .project-content.status, #summary-desktop .project-data-list .project-loading .project-institucional .project-content.status, .project-loading .project-institucional #summary-desktop .project-data-list .project-content.status, #summary-desktop .project-data-list .project-institucional .project-content.project-alerts, .project-institucional #summary-desktop .project-data-list .project-content.project-alerts, #summary-desktop .project-data-list .project-institucional .project-content.project-btn-translucid, .project-institucional #summary-desktop .project-data-list .project-content.project-btn-translucid, #summary-desktop .project-data-list .project-institucional .options-container .double-btn .project-content.btn-left, .project-institucional .options-container .double-btn #summary-desktop .project-data-list .project-content.btn-left, #summary-desktop .project-data-list .options-container .double-btn .project-institucional .project-content.btn-left, .options-container .double-btn .project-institucional #summary-desktop .project-data-list .project-content.btn-left,
  #summary-desktop .project-data-list .project-institucional .options-container .double-btn .project-content.btn-right,
  .project-institucional .options-container .double-btn #summary-desktop .project-data-list .project-content.btn-right,
  #summary-desktop .project-data-list .options-container .double-btn .project-institucional .project-content.btn-right,
  .options-container .double-btn .project-institucional #summary-desktop .project-data-list .project-content.btn-right, #summary-desktop .project-data-list .project-institucional .options-container .double-btn .project-content.btn-periodos, .project-institucional .options-container .double-btn #summary-desktop .project-data-list .project-content.btn-periodos, #summary-desktop .project-data-list .options-container .double-btn .project-institucional .project-content.btn-periodos, .options-container .double-btn .project-institucional #summary-desktop .project-data-list .project-content.btn-periodos,
  #summary-desktop .project-data-list .project-institucional .options-container .double-btn .project-content.btn-dia-semana,
  .project-institucional .options-container .double-btn #summary-desktop .project-data-list .project-content.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .project-institucional .project-content.btn-dia-semana,
  .options-container .double-btn .project-institucional #summary-desktop .project-data-list .project-content.btn-dia-semana,
  #summary-desktop .project-data-list .project-institucional .options-container .double-btn .project-content.btn-recorrencia-assinatura,
  .project-institucional .options-container .double-btn #summary-desktop .project-data-list .project-content.btn-recorrencia-assinatura,
  #summary-desktop .project-data-list .options-container .double-btn .project-institucional .project-content.btn-recorrencia-assinatura,
  .options-container .double-btn .project-institucional #summary-desktop .project-data-list .project-content.btn-recorrencia-assinatura, #summary-desktop .project-data-list .project-institucional .project-content.btn-model-8, .project-institucional #summary-desktop .project-data-list .project-content.btn-model-8, #summary-desktop .project-data-list .project-institucional .project-content.btn-model-9, .project-institucional #summary-desktop .project-data-list .project-content.btn-model-9, #summary-desktop .project-data-list .project-institucional .project-content.btn-model-10, .project-institucional #summary-desktop .project-data-list .project-content.btn-model-10, #summary-desktop .project-data-list .project-institucional .options-container .project-content.header, .project-institucional .options-container #summary-desktop .project-data-list .project-content.header, #summary-desktop .project-data-list .options-container .project-institucional .project-content.header, .options-container .project-institucional #summary-desktop .project-data-list .project-content.header, #summary-desktop .project-data-list .project-loading .gs-center.messages, .project-loading #summary-desktop .project-data-list .gs-center.messages, #summary-desktop .project-data-list .project-loading .messages.project-btn, .project-loading #summary-desktop .project-data-list .messages.project-btn, #summary-desktop .project-data-list .project-loading .project-footer .messages.project-btn-news-footer, .project-loading .project-footer #summary-desktop .project-data-list .messages.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .project-loading .messages.project-btn-news-footer, .project-footer .project-loading #summary-desktop .project-data-list .messages.project-btn-news-footer, #summary-desktop .project-data-list .project-loading .messages.project-btn-big, .project-loading #summary-desktop .project-data-list .messages.project-btn-big, #summary-desktop .project-data-list .project-loading .messages.project-adicionar-cesta, .project-loading #summary-desktop .project-data-list .messages.project-adicionar-cesta, #summary-desktop .project-data-list .project-loading .messages.project-btn-shaddow, .project-loading #summary-desktop .project-data-list .messages.project-btn-shaddow, #summary-desktop .project-data-list .project-loading .messages.btn-model-5, .project-loading #summary-desktop .project-data-list .messages.btn-model-5, #summary-desktop .project-data-list .project-loading .messages.project-btn-tabs, .project-loading #summary-desktop .project-data-list .messages.project-btn-tabs, #summary-desktop .project-data-list .project-loading .messages.btn-model-6, .project-loading #summary-desktop .project-data-list .messages.btn-model-6, #summary-desktop .project-data-list .project-loading .messages.btn-model-7, .project-loading #summary-desktop .project-data-list .messages.btn-model-7, #summary-desktop .project-data-list .project-loading .messages.project-btn-filters, .project-loading #summary-desktop .project-data-list .messages.project-btn-filters, #summary-desktop .project-data-list .project-loading .messages.project-btn-highlight, .project-loading #summary-desktop .project-data-list .messages.project-btn-highlight, #summary-desktop .project-data-list .project-loading .messages.status, .project-loading #summary-desktop .project-data-list .messages.status, #summary-desktop .project-data-list .project-loading .messages.project-alerts, .project-loading #summary-desktop .project-data-list .messages.project-alerts, #summary-desktop .project-data-list .project-loading .messages.project-btn-translucid, .project-loading #summary-desktop .project-data-list .messages.project-btn-translucid, #summary-desktop .project-data-list .project-loading .options-container .double-btn .messages.btn-left, .project-loading .options-container .double-btn #summary-desktop .project-data-list .messages.btn-left, #summary-desktop .project-data-list .options-container .double-btn .project-loading .messages.btn-left, .options-container .double-btn .project-loading #summary-desktop .project-data-list .messages.btn-left,
  #summary-desktop .project-data-list .project-loading .options-container .double-btn .messages.btn-right,
  .project-loading .options-container .double-btn #summary-desktop .project-data-list .messages.btn-right,
  #summary-desktop .project-data-list .options-container .double-btn .project-loading .messages.btn-right,
  .options-container .double-btn .project-loading #summary-desktop .project-data-list .messages.btn-right, #summary-desktop .project-data-list .project-loading .options-container .double-btn .messages.btn-periodos, .project-loading .options-container .double-btn #summary-desktop .project-data-list .messages.btn-periodos, #summary-desktop .project-data-list .options-container .double-btn .project-loading .messages.btn-periodos, .options-container .double-btn .project-loading #summary-desktop .project-data-list .messages.btn-periodos,
  #summary-desktop .project-data-list .project-loading .options-container .double-btn .messages.btn-dia-semana,
  .project-loading .options-container .double-btn #summary-desktop .project-data-list .messages.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .project-loading .messages.btn-dia-semana,
  .options-container .double-btn .project-loading #summary-desktop .project-data-list .messages.btn-dia-semana,
  #summary-desktop .project-data-list .project-loading .options-container .double-btn .messages.btn-recorrencia-assinatura,
  .project-loading .options-container .double-btn #summary-desktop .project-data-list .messages.btn-recorrencia-assinatura,
  #summary-desktop .project-data-list .options-container .double-btn .project-loading .messages.btn-recorrencia-assinatura,
  .options-container .double-btn .project-loading #summary-desktop .project-data-list .messages.btn-recorrencia-assinatura, #summary-desktop .project-data-list .project-loading .messages.btn-model-8, .project-loading #summary-desktop .project-data-list .messages.btn-model-8, #summary-desktop .project-data-list .project-loading .messages.btn-model-9, .project-loading #summary-desktop .project-data-list .messages.btn-model-9, #summary-desktop .project-data-list .project-loading .messages.btn-model-10, .project-loading #summary-desktop .project-data-list .messages.btn-model-10, #summary-desktop .project-data-list .project-loading .options-container .messages.header, .project-loading .options-container #summary-desktop .project-data-list .messages.header, #summary-desktop .project-data-list .options-container .project-loading .messages.header, .options-container .project-loading #summary-desktop .project-data-list .messages.header, #summary-desktop .project-data-list .options-container .gs-fsmall.header, .options-container #summary-desktop .project-data-list .gs-fsmall.header, #summary-desktop .project-data-list .options-container .header.project-btn, .options-container #summary-desktop .project-data-list .header.project-btn, #summary-desktop .project-data-list .options-container .project-footer .header.project-btn-news-footer, .options-container .project-footer #summary-desktop .project-data-list .header.project-btn-news-footer, #summary-desktop .project-data-list .project-footer .options-container .header.project-btn-news-footer, .project-footer .options-container #summary-desktop .project-data-list .header.project-btn-news-footer, #summary-desktop .project-data-list .options-container .header.project-btn-big, .options-container #summary-desktop .project-data-list .header.project-btn-big, #summary-desktop .project-data-list .options-container .header.project-adicionar-cesta, .options-container #summary-desktop .project-data-list .header.project-adicionar-cesta, #summary-desktop .project-data-list .options-container .header.project-btn-shaddow, .options-container #summary-desktop .project-data-list .header.project-btn-shaddow, #summary-desktop .project-data-list .options-container .header.btn-model-5, .options-container #summary-desktop .project-data-list .header.btn-model-5, #summary-desktop .project-data-list .options-container .header.project-btn-tabs, .options-container #summary-desktop .project-data-list .header.project-btn-tabs, #summary-desktop .project-data-list .options-container .header.btn-model-6, .options-container #summary-desktop .project-data-list .header.btn-model-6, #summary-desktop .project-data-list .options-container .header.btn-model-7, .options-container #summary-desktop .project-data-list .header.btn-model-7, #summary-desktop .project-data-list .options-container .header.project-btn-filters, .options-container #summary-desktop .project-data-list .header.project-btn-filters, #summary-desktop .project-data-list .options-container .header.project-btn-highlight, .options-container #summary-desktop .project-data-list .header.project-btn-highlight, #summary-desktop .project-data-list .options-container .project-loading .header.status, .options-container .project-loading #summary-desktop .project-data-list .header.status, #summary-desktop .project-data-list .project-loading .options-container .header.status, .project-loading .options-container #summary-desktop .project-data-list .header.status, #summary-desktop .project-data-list .options-container .header.project-alerts, .options-container #summary-desktop .project-data-list .header.project-alerts, #summary-desktop .project-data-list .options-container .header.project-btn-translucid, .options-container #summary-desktop .project-data-list .header.project-btn-translucid, #summary-desktop .project-data-list .options-container .double-btn .header.btn-left, .options-container .double-btn #summary-desktop .project-data-list .header.btn-left,
  #summary-desktop .project-data-list .options-container .double-btn .header.btn-right,
  .options-container .double-btn #summary-desktop .project-data-list .header.btn-right, #summary-desktop .project-data-list .options-container .double-btn .header.btn-periodos, .options-container .double-btn #summary-desktop .project-data-list .header.btn-periodos,
  #summary-desktop .project-data-list .options-container .double-btn .header.btn-dia-semana,
  .options-container .double-btn #summary-desktop .project-data-list .header.btn-dia-semana,
  #summary-desktop .project-data-list .options-container .double-btn .header.btn-recorrencia-assinatura,
  .options-container .double-btn #summary-desktop .project-data-list .header.btn-recorrencia-assinatura, #summary-desktop .project-data-list .options-container .header.btn-model-8, .options-container #summary-desktop .project-data-list .header.btn-model-8, #summary-desktop .project-data-list .options-container .header.btn-model-9, .options-container #summary-desktop .project-data-list .header.btn-model-9, #summary-desktop .project-data-list .options-container .header.btn-model-10, .options-container #summary-desktop .project-data-list .header.btn-model-10 {
    font-size: 0.6em;
    width: 80%;
    margin: 30px auto 0 auto; }
  #summary-desktop .cart-product {
    vertical-align: top; }
  #summary-desktop #get-content {
    font-size: 0.8em;
    color: #696969;
    margin: 20px 0; }
    #summary-desktop #get-content td {
      padding: 15px 8px;
      border-bottom: 1px solid #ccc; }
    #summary-desktop #get-content td.gs-fbig, #summary-desktop #get-content .project-summary td.project-sum-price, .project-summary #summary-desktop #get-content td.project-sum-price,
    #summary-desktop #get-content td.gs-toupper,
    #summary-desktop #get-content .project-footer td.project-btn-news-footer,
    .project-footer #summary-desktop #get-content td.project-btn-news-footer,
    #summary-desktop #get-content td.project-btn-tabs,
    #summary-desktop #get-content td.btn-model-6,
    #summary-desktop #get-content td.btn-model-7,
    #summary-desktop #get-content td.project-btn-highlight,
    #summary-desktop #get-content .project-loading td.status,
    .project-loading #summary-desktop #get-content td.status,
    #summary-desktop #get-content td.project-alerts,
    #summary-desktop #get-content td.project-btn-translucid,
    #summary-desktop #get-content .project-cupom-block td.project-btn-cupom,
    .project-cupom-block #summary-desktop #get-content td.project-btn-cupom,
    #summary-desktop #get-content td.project-categories,
    #summary-desktop #get-content .project-header-user td.project-btn-filters,
    .project-header-user #summary-desktop #get-content td.project-btn-filters,
    #summary-desktop #get-content td.btn-model-5,
    #summary-desktop #get-content td.btn-model-9,
    #summary-desktop #get-content td.btn-model-10 {
      border-bottom: none; }

  .desktop-cart-amount {
    width: 48px;
    border: 1px solid #071543;
    background-color: #fff; }

  .cart-product br {
    display: none; }

  .cart-name {
    font-family: 'montserratbold', sans, serif;
    font-weight: bold;
    font-size: 1em;
    color: #696969;
    width: 80%;
    padding-left: 15px;
    margin-bottom: 10px; }

  .cart-category {
    font-family: 'montserratbold', sans, serif;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 0.8em;
    color: #696969;
    padding-left: 15px; }

  .cart-attr {
    font-size: 0.9em;
    color: #929292;
    padding-left: 15px; }
    .cart-attr br {
      display: block; }

  .cart-desktop-price {
    font-size: 1.2em;
    color: #696969;
    width: 80%;
    padding-left: 15px;
    margin: 15px 0; }

  #get-content-cupom .project-btn.project-btn-cupom.project-bg-success, #get-content-cupom .project-footer .project-btn-cupom.project-bg-success.project-btn-news-footer, .project-footer #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-news-footer, #get-content-cupom .project-footer .project-btn-cupom.project-btn-news-footer.project-adicionar-cesta, .project-footer #get-content-cupom .project-btn-cupom.project-btn-news-footer.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-big, #get-content-cupom .project-btn-cupom.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-shaddow, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-5, #get-content-cupom .project-btn-cupom.btn-model-5.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-btn-shaddow.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-tabs, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-6, #get-content-cupom .project-btn-cupom.btn-model-6.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-7, #get-content-cupom .project-btn-cupom.btn-model-7.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-btn-tabs.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-filters, #get-content-cupom .project-btn-cupom.project-btn-filters.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-highlight, #get-content-cupom .project-loading .project-btn-cupom.project-bg-success.status, .project-loading #get-content-cupom .project-btn-cupom.project-bg-success.status, #get-content-cupom .project-loading .project-btn-cupom.status.project-adicionar-cesta, .project-loading #get-content-cupom .project-btn-cupom.status.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-alerts, #get-content-cupom .project-btn-cupom.project-alerts.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-btn-highlight.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-translucid, #get-content-cupom .project-btn-cupom.project-btn-translucid.project-adicionar-cesta, #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-left, .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-left, #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-left.project-adicionar-cesta, .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-left.project-adicionar-cesta,
  #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-right,
  .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-right, #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-periodos, .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-periodos, #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-periodos.project-adicionar-cesta, .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-periodos.project-adicionar-cesta,
  #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-dia-semana,
  .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-dia-semana,
  #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-dia-semana.project-adicionar-cesta,
  .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-dia-semana.project-adicionar-cesta,
  #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-recorrencia-assinatura,
  .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-recorrencia-assinatura,
  #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-recorrencia-assinatura.project-adicionar-cesta,
  .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-recorrencia-assinatura.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-8, #get-content-cupom .project-btn-cupom.btn-model-8.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-9, #get-content-cupom .project-btn-cupom.btn-model-9.project-adicionar-cesta, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-10, #get-content-cupom .project-btn-cupom.btn-model-10.project-adicionar-cesta {
    width: auto;
    display: inline-block;
    padding: 17px 14px;
    background: #61C835;
    text-transform: uppercase;
    color: #fff;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
    font-size: 0.6em;
    text-align: center;
    letter-spacing: 2px;
    margin: 1px 0 0 0;
    height: 48px; }
    #get-content-cupom .project-btn.project-btn-cupom.project-bg-success:hover, #get-content-cupom .project-footer .project-btn-cupom.project-bg-success.project-btn-news-footer:hover, .project-footer #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-news-footer:hover, #get-content-cupom .project-footer .project-btn-cupom.project-btn-news-footer.project-adicionar-cesta:hover, .project-footer #get-content-cupom .project-btn-cupom.project-btn-news-footer.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-big:hover, #get-content-cupom .project-btn-cupom.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-shaddow:hover, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-5:hover, #get-content-cupom .project-btn-cupom.btn-model-5.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-btn-shaddow.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-tabs:hover, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-6:hover, #get-content-cupom .project-btn-cupom.btn-model-6.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-7:hover, #get-content-cupom .project-btn-cupom.btn-model-7.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-btn-tabs.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-filters:hover, #get-content-cupom .project-btn-cupom.project-btn-filters.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-highlight:hover, #get-content-cupom .project-loading .project-btn-cupom.project-bg-success.status:hover, .project-loading #get-content-cupom .project-btn-cupom.project-bg-success.status:hover, #get-content-cupom .project-loading .project-btn-cupom.status.project-adicionar-cesta:hover, .project-loading #get-content-cupom .project-btn-cupom.status.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-alerts:hover, #get-content-cupom .project-btn-cupom.project-alerts.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-btn-highlight.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.project-btn-translucid:hover, #get-content-cupom .project-btn-cupom.project-btn-translucid.project-adicionar-cesta:hover, #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-left:hover, .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-left:hover, #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-left.project-adicionar-cesta:hover, .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-left.project-adicionar-cesta:hover,
    #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-right:hover,
    .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-right:hover, #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-periodos:hover, .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-periodos:hover, #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-periodos.project-adicionar-cesta:hover, .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-periodos.project-adicionar-cesta:hover,
    #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-dia-semana:hover,
    .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-dia-semana:hover,
    #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-dia-semana.project-adicionar-cesta:hover,
    .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-dia-semana.project-adicionar-cesta:hover,
    #get-content-cupom .options-container .double-btn .project-btn-cupom.project-bg-success.btn-recorrencia-assinatura:hover,
    .options-container .double-btn #get-content-cupom .project-btn-cupom.project-bg-success.btn-recorrencia-assinatura:hover,
    #get-content-cupom .options-container .double-btn .project-btn-cupom.btn-recorrencia-assinatura.project-adicionar-cesta:hover,
    .options-container .double-btn #get-content-cupom .project-btn-cupom.btn-recorrencia-assinatura.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-8:hover, #get-content-cupom .project-btn-cupom.btn-model-8.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-9:hover, #get-content-cupom .project-btn-cupom.btn-model-9.project-adicionar-cesta:hover, #get-content-cupom .project-btn-cupom.project-bg-success.btn-model-10:hover, #get-content-cupom .project-btn-cupom.btn-model-10.project-adicionar-cesta:hover {
      background-color: #80d45c;
      color: #fff; }
  #get-content-cupom .project-btn.project-cbspacing, #get-content-cupom .project-footer .project-cbspacing.project-btn-news-footer, .project-footer #get-content-cupom .project-cbspacing.project-btn-news-footer, #get-content-cupom .project-cbspacing.project-btn-big, #get-content-cupom .project-cbspacing.project-adicionar-cesta, #get-content-cupom .project-cbspacing.project-btn-shaddow, #get-content-cupom .project-cbspacing.btn-model-5, #get-content-cupom .project-cbspacing.project-btn-tabs, #get-content-cupom .project-cbspacing.btn-model-6, #get-content-cupom .project-cbspacing.btn-model-7, #get-content-cupom .project-cbspacing.project-btn-filters, #get-content-cupom .project-cbspacing.project-btn-highlight, #get-content-cupom .project-loading .project-cbspacing.status, .project-loading #get-content-cupom .project-cbspacing.status, #get-content-cupom .project-cbspacing.project-alerts, #get-content-cupom .project-cbspacing.project-btn-translucid, #get-content-cupom .options-container .double-btn .project-cbspacing.btn-left, .options-container .double-btn #get-content-cupom .project-cbspacing.btn-left,
  #get-content-cupom .options-container .double-btn .project-cbspacing.btn-right,
  .options-container .double-btn #get-content-cupom .project-cbspacing.btn-right, #get-content-cupom .options-container .double-btn .project-cbspacing.btn-periodos, .options-container .double-btn #get-content-cupom .project-cbspacing.btn-periodos,
  #get-content-cupom .options-container .double-btn .project-cbspacing.btn-dia-semana,
  .options-container .double-btn #get-content-cupom .project-cbspacing.btn-dia-semana,
  #get-content-cupom .options-container .double-btn .project-cbspacing.btn-recorrencia-assinatura,
  .options-container .double-btn #get-content-cupom .project-cbspacing.btn-recorrencia-assinatura, #get-content-cupom .project-cbspacing.btn-model-8, #get-content-cupom .project-cbspacing.btn-model-9, #get-content-cupom .project-cbspacing.btn-model-10 {
    width: auto;
    padding: 7px 7px 0 7px;
    margin: 0;
    height: 50px;
    background: #fff;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px; }
    #get-content-cupom .project-btn.project-cbspacing input, #get-content-cupom .project-footer .project-cbspacing.project-btn-news-footer input, .project-footer #get-content-cupom .project-cbspacing.project-btn-news-footer input, #get-content-cupom .project-cbspacing.project-btn-big input, #get-content-cupom .project-cbspacing.project-adicionar-cesta input, #get-content-cupom .project-cbspacing.project-btn-shaddow input, #get-content-cupom .project-cbspacing.btn-model-5 input, #get-content-cupom .project-cbspacing.project-btn-tabs input, #get-content-cupom .project-cbspacing.btn-model-6 input, #get-content-cupom .project-cbspacing.btn-model-7 input, #get-content-cupom .project-cbspacing.project-btn-filters input, #get-content-cupom .project-cbspacing.project-btn-highlight input, #get-content-cupom .project-loading .project-cbspacing.status input, .project-loading #get-content-cupom .project-cbspacing.status input, #get-content-cupom .project-cbspacing.project-alerts input, #get-content-cupom .project-cbspacing.project-btn-translucid input, #get-content-cupom .options-container .double-btn .project-cbspacing.btn-left input, .options-container .double-btn #get-content-cupom .project-cbspacing.btn-left input,
    #get-content-cupom .options-container .double-btn .project-cbspacing.btn-right input,
    .options-container .double-btn #get-content-cupom .project-cbspacing.btn-right input, #get-content-cupom .options-container .double-btn .project-cbspacing.btn-periodos input, .options-container .double-btn #get-content-cupom .project-cbspacing.btn-periodos input,
    #get-content-cupom .options-container .double-btn .project-cbspacing.btn-dia-semana input,
    .options-container .double-btn #get-content-cupom .project-cbspacing.btn-dia-semana input,
    #get-content-cupom .options-container .double-btn .project-cbspacing.btn-recorrencia-assinatura input,
    .options-container .double-btn #get-content-cupom .project-cbspacing.btn-recorrencia-assinatura input, #get-content-cupom .project-cbspacing.btn-model-8 input, #get-content-cupom .project-cbspacing.btn-model-9 input, #get-content-cupom .project-cbspacing.btn-model-10 input {
      border: none;
      color: #000; }

  /**
    * Checkout
  
  
  
  
  
  */
  .steps-checkout {
    margin-top: 130px;
    margin-bottom: 25px; }
    .steps-checkout .checkpoint {
      width: 38px;
      height: 38px;
      border: 2px solid #071543;
      display: block;
      border-radius: 38px;
      margin: 0 auto;
      background-color: #fff;
      background-image: url("../assets/img/icone-checkpoint.svg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 15px; }
      .steps-checkout .checkpoint.active {
        background-color: #071543; }
      .steps-checkout .checkpoint.cart {
        background-color: #fff;
        background-image: url("../assets/img/icone-cesta-light.svg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 26px auto; }
    .steps-checkout .checkpoint-label {
      font-family: "montserratbold";
      text-transform: uppercase;
      font-size: 0.5em;
      text-align: center;
      line-height: 11px;
      display: block;
      margin-top: 10px;
      color: #071543; }
    .steps-checkout:before {
      content: "";
      border-top: 2px solid #071543;
      width: auto;
      margin-top: 20px;
      position: absolute;
      width: 435px;
      margin-left: 41px; }

  button.project-btn.project-hover.project-alert.btn-dont, .project-footer button.project-hover.project-alert.btn-dont.project-btn-news-footer, .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-right, .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-recorrencia-assinatura, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-5, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-6, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-8, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-9, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-10, .project-footer button.project-alert.btn-dont.project-btn-news-footer.project-adicionar-cesta, button.project-hover.project-alert.btn-dont.project-btn-big, .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-left,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-right, .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-periodos,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-recorrencia-assinatura, button.project-alert.btn-dont.project-btn-big.btn-model-5, button.project-alert.btn-dont.project-btn-big.btn-model-6, button.project-alert.btn-dont.project-btn-big.btn-model-8, button.project-alert.btn-dont.project-btn-big.btn-model-9, button.project-alert.btn-dont.project-btn-big.btn-model-10, button.project-alert.btn-dont.project-adicionar-cesta, button.project-hover.project-alert.btn-dont.project-btn-shaddow, .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-left,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-right, .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-periodos,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-recorrencia-assinatura, button.project-alert.btn-dont.btn-model-5, button.project-alert.btn-dont.project-btn-shaddow.btn-model-6, button.project-alert.btn-dont.project-btn-shaddow.btn-model-8, button.project-alert.btn-dont.project-btn-shaddow.btn-model-9, button.project-alert.btn-dont.project-btn-shaddow.btn-model-10, button.project-alert.btn-dont.project-btn-shaddow.project-adicionar-cesta, button.project-hover.project-alert.btn-dont.project-btn-tabs, .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-left, .options-container .double-btn button.project-alert.btn-dont.btn-left.btn-model-7,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-right,
  .options-container .double-btn button.project-alert.btn-dont.btn-right.btn-model-7, .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-periodos, .options-container .double-btn button.project-alert.btn-dont.btn-periodos.btn-model-7,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.btn-dia-semana.btn-model-7,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-recorrencia-assinatura,
  .options-container .double-btn button.project-alert.btn-dont.btn-recorrencia-assinatura.btn-model-7, button.project-alert.btn-dont.project-btn-tabs.btn-model-5, button.project-alert.btn-dont.btn-model-5.btn-model-7, button.project-alert.btn-dont.btn-model-6, button.project-hover.project-alert.btn-dont.btn-model-7, button.project-alert.btn-dont.btn-model-7.btn-model-8, button.project-alert.btn-dont.btn-model-7.btn-model-9, button.project-alert.btn-dont.btn-model-7.btn-model-10, button.project-alert.btn-dont.btn-model-7.project-adicionar-cesta, button.project-alert.btn-dont.project-btn-tabs.btn-model-8, button.project-alert.btn-dont.project-btn-tabs.btn-model-9, button.project-alert.btn-dont.project-btn-tabs.btn-model-10, button.project-alert.btn-dont.project-btn-tabs.project-adicionar-cesta, button.project-hover.project-alert.btn-dont.project-btn-filters, .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-left,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-right, .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-periodos,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-recorrencia-assinatura, button.project-alert.btn-dont.project-btn-filters.btn-model-5, button.project-alert.btn-dont.project-btn-filters.btn-model-6, button.project-alert.btn-dont.project-btn-filters.btn-model-8, button.project-alert.btn-dont.project-btn-filters.btn-model-9, button.project-alert.btn-dont.project-btn-filters.btn-model-10, button.project-alert.btn-dont.project-btn-filters.project-adicionar-cesta, button.project-hover.project-alert.btn-dont.project-btn-highlight, .project-loading button.project-hover.project-alert.btn-dont.status, .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-left, .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-left,
  .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-right,
  .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-right, .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-periodos, .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-periodos,
  .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-dia-semana,
  .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-dia-semana,
  .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-recorrencia-assinatura,
  .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-recorrencia-assinatura, .project-loading button.project-alert.btn-dont.status.btn-model-5, .project-loading button.project-alert.btn-dont.status.btn-model-6, .project-loading button.project-alert.btn-dont.status.btn-model-8, .project-loading button.project-alert.btn-dont.status.btn-model-9, .project-loading button.project-alert.btn-dont.status.btn-model-10, .project-loading button.project-alert.btn-dont.status.project-adicionar-cesta, .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-left, .options-container .double-btn button.project-alert.btn-dont.btn-left.project-alerts,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-right,
  .options-container .double-btn button.project-alert.btn-dont.btn-right.project-alerts, .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-periodos, .options-container .double-btn button.project-alert.btn-dont.btn-periodos.project-alerts,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.btn-dia-semana.project-alerts,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-recorrencia-assinatura,
  .options-container .double-btn button.project-alert.btn-dont.btn-recorrencia-assinatura.project-alerts, button.project-alert.btn-dont.project-btn-highlight.btn-model-5, button.project-alert.btn-dont.btn-model-5.project-alerts, button.project-alert.btn-dont.project-btn-highlight.btn-model-6, button.project-alert.btn-dont.btn-model-6.project-alerts, button.project-alert.btn-dont.project-btn-highlight.btn-model-8, button.project-alert.btn-dont.btn-model-8.project-alerts, button.project-alert.btn-dont.project-btn-highlight.btn-model-9, button.project-alert.btn-dont.btn-model-9.project-alerts, button.project-alert.btn-dont.project-btn-highlight.btn-model-10, button.project-alert.btn-dont.btn-model-10.project-alerts, button.project-hover.project-alert.btn-dont.project-alerts, button.project-alert.btn-dont.project-alerts.project-adicionar-cesta, button.project-alert.btn-dont.project-btn-highlight.project-adicionar-cesta, button.project-hover.project-alert.btn-dont.project-btn-translucid, .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-left,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-right, .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-periodos,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-recorrencia-assinatura, button.project-alert.btn-dont.project-btn-translucid.btn-model-5, button.project-alert.btn-dont.project-btn-translucid.btn-model-6, button.project-alert.btn-dont.project-btn-translucid.btn-model-8, button.project-alert.btn-dont.project-btn-translucid.btn-model-9, button.project-alert.btn-dont.project-btn-translucid.btn-model-10, button.project-alert.btn-dont.project-btn-translucid.project-adicionar-cesta, .options-container .double-btn button.project-alert.btn-dont.btn-left,
  .options-container .double-btn button.project-alert.btn-dont.btn-right, .options-container .double-btn button.project-alert.btn-dont.btn-periodos,
  .options-container .double-btn button.project-alert.btn-dont.btn-dia-semana,
  .options-container .double-btn button.project-alert.btn-dont.btn-recorrencia-assinatura, button.project-alert.btn-dont.btn-model-7.btn-model-6, button.project-alert.btn-dont.btn-model-8, button.project-alert.btn-dont.btn-model-9, button.project-alert.btn-dont.btn-model-10 {
    background-color: #fff;
    color: #F02B39;
    text-transform: none;
    border-radius: 2px;
    border: 1px solid #ccc !important;
    padding: 15px 25px;
    margin: 0; }
    button.project-btn.project-hover.project-alert.btn-dont:hover, .project-footer button.project-hover.project-alert.btn-dont.project-btn-news-footer:hover, .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn button.project-alert.btn-dont.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-5:hover, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-6:hover, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-8:hover, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-9:hover, .project-footer button.project-alert.btn-dont.project-btn-news-footer.btn-model-10:hover, .project-footer button.project-alert.btn-dont.project-btn-news-footer.project-adicionar-cesta:hover, button.project-hover.project-alert.btn-dont.project-btn-big:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-left:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-right:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-periodos:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-big.btn-recorrencia-assinatura:hover, button.project-alert.btn-dont.project-btn-big.btn-model-5:hover, button.project-alert.btn-dont.project-btn-big.btn-model-6:hover, button.project-alert.btn-dont.project-btn-big.btn-model-8:hover, button.project-alert.btn-dont.project-btn-big.btn-model-9:hover, button.project-alert.btn-dont.project-btn-big.btn-model-10:hover, button.project-alert.btn-dont.project-adicionar-cesta:hover, button.project-hover.project-alert.btn-dont.project-btn-shaddow:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-left:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-right:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-periodos:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-shaddow.btn-recorrencia-assinatura:hover, button.project-alert.btn-dont.btn-model-5:hover, button.project-alert.btn-dont.project-btn-shaddow.btn-model-6:hover, button.project-alert.btn-dont.project-btn-shaddow.btn-model-8:hover, button.project-alert.btn-dont.project-btn-shaddow.btn-model-9:hover, button.project-alert.btn-dont.project-btn-shaddow.btn-model-10:hover, button.project-alert.btn-dont.project-btn-shaddow.project-adicionar-cesta:hover, button.project-hover.project-alert.btn-dont.project-btn-tabs:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-left:hover, .options-container .double-btn button.project-alert.btn-dont.btn-left.btn-model-7:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-right:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-right.btn-model-7:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-periodos:hover, .options-container .double-btn button.project-alert.btn-dont.btn-periodos.btn-model-7:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-dia-semana.btn-model-7:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-tabs.btn-recorrencia-assinatura:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-recorrencia-assinatura.btn-model-7:hover, button.project-alert.btn-dont.project-btn-tabs.btn-model-5:hover, button.project-alert.btn-dont.btn-model-5.btn-model-7:hover, button.project-alert.btn-dont.btn-model-6:hover, button.project-hover.project-alert.btn-dont.btn-model-7:hover, button.project-alert.btn-dont.btn-model-7.btn-model-8:hover, button.project-alert.btn-dont.btn-model-7.btn-model-9:hover, button.project-alert.btn-dont.btn-model-7.btn-model-10:hover, button.project-alert.btn-dont.btn-model-7.project-adicionar-cesta:hover, button.project-alert.btn-dont.project-btn-tabs.btn-model-8:hover, button.project-alert.btn-dont.project-btn-tabs.btn-model-9:hover, button.project-alert.btn-dont.project-btn-tabs.btn-model-10:hover, button.project-alert.btn-dont.project-btn-tabs.project-adicionar-cesta:hover, button.project-hover.project-alert.btn-dont.project-btn-filters:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-left:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-right:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-periodos:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-filters.btn-recorrencia-assinatura:hover, button.project-alert.btn-dont.project-btn-filters.btn-model-5:hover, button.project-alert.btn-dont.project-btn-filters.btn-model-6:hover, button.project-alert.btn-dont.project-btn-filters.btn-model-8:hover, button.project-alert.btn-dont.project-btn-filters.btn-model-9:hover, button.project-alert.btn-dont.project-btn-filters.btn-model-10:hover, button.project-alert.btn-dont.project-btn-filters.project-adicionar-cesta:hover, button.project-hover.project-alert.btn-dont.project-btn-highlight:hover, .project-loading button.project-hover.project-alert.btn-dont.status:hover, .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-left:hover, .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-left:hover,
    .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-right:hover,
    .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-right:hover, .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-periodos:hover, .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-periodos:hover,
    .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-dia-semana:hover,
    .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-dia-semana:hover,
    .project-loading .options-container .double-btn button.project-alert.btn-dont.status.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-loading button.project-alert.btn-dont.status.btn-recorrencia-assinatura:hover, .project-loading button.project-alert.btn-dont.status.btn-model-5:hover, .project-loading button.project-alert.btn-dont.status.btn-model-6:hover, .project-loading button.project-alert.btn-dont.status.btn-model-8:hover, .project-loading button.project-alert.btn-dont.status.btn-model-9:hover, .project-loading button.project-alert.btn-dont.status.btn-model-10:hover, .project-loading button.project-alert.btn-dont.status.project-adicionar-cesta:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-left:hover, .options-container .double-btn button.project-alert.btn-dont.btn-left.project-alerts:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-right:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-right.project-alerts:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-periodos:hover, .options-container .double-btn button.project-alert.btn-dont.btn-periodos.project-alerts:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-dia-semana.project-alerts:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-highlight.btn-recorrencia-assinatura:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-recorrencia-assinatura.project-alerts:hover, button.project-alert.btn-dont.project-btn-highlight.btn-model-5:hover, button.project-alert.btn-dont.btn-model-5.project-alerts:hover, button.project-alert.btn-dont.project-btn-highlight.btn-model-6:hover, button.project-alert.btn-dont.btn-model-6.project-alerts:hover, button.project-alert.btn-dont.project-btn-highlight.btn-model-8:hover, button.project-alert.btn-dont.btn-model-8.project-alerts:hover, button.project-alert.btn-dont.project-btn-highlight.btn-model-9:hover, button.project-alert.btn-dont.btn-model-9.project-alerts:hover, button.project-alert.btn-dont.project-btn-highlight.btn-model-10:hover, button.project-alert.btn-dont.btn-model-10.project-alerts:hover, button.project-hover.project-alert.btn-dont.project-alerts:hover, button.project-alert.btn-dont.project-alerts.project-adicionar-cesta:hover, button.project-alert.btn-dont.project-btn-highlight.project-adicionar-cesta:hover, button.project-hover.project-alert.btn-dont.project-btn-translucid:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-left:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-right:hover, .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-periodos:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.project-btn-translucid.btn-recorrencia-assinatura:hover, button.project-alert.btn-dont.project-btn-translucid.btn-model-5:hover, button.project-alert.btn-dont.project-btn-translucid.btn-model-6:hover, button.project-alert.btn-dont.project-btn-translucid.btn-model-8:hover, button.project-alert.btn-dont.project-btn-translucid.btn-model-9:hover, button.project-alert.btn-dont.project-btn-translucid.btn-model-10:hover, button.project-alert.btn-dont.project-btn-translucid.project-adicionar-cesta:hover, .options-container .double-btn button.project-alert.btn-dont.btn-left:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-right:hover, .options-container .double-btn button.project-alert.btn-dont.btn-periodos:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-dia-semana:hover,
    .options-container .double-btn button.project-alert.btn-dont.btn-recorrencia-assinatura:hover, button.project-alert.btn-dont.btn-model-7.btn-model-6:hover, button.project-alert.btn-dont.btn-model-8:hover, button.project-alert.btn-dont.btn-model-9:hover, button.project-alert.btn-dont.btn-model-10:hover {
      background-color: #DEDEDE;
      border-color: #696969; }

  button.project-btn.project-hover.project-success.btn-do, .project-footer button.project-hover.project-success.btn-do.project-btn-news-footer, .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-left, .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-left,
  .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-right,
  .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-right, .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-periodos, .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-periodos,
  .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-dia-semana,
  .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-dia-semana,
  .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-recorrencia-assinatura,
  .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-recorrencia-assinatura, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-5, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-6, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-8, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-9, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-10, .project-footer button.project-success.btn-do.project-btn-news-footer.project-adicionar-cesta, button.project-hover.project-success.btn-do.project-btn-big, .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-left,
  .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-right, .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-periodos,
  .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-recorrencia-assinatura, button.project-success.btn-do.project-btn-big.btn-model-5, button.project-success.btn-do.project-btn-big.btn-model-6, button.project-success.btn-do.project-btn-big.btn-model-8, button.project-success.btn-do.project-btn-big.btn-model-9, button.project-success.btn-do.project-btn-big.btn-model-10, button.project-success.btn-do.project-adicionar-cesta, button.project-hover.project-success.btn-do.project-btn-shaddow, .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-left,
  .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-right, .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-periodos,
  .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-recorrencia-assinatura, button.project-success.btn-do.btn-model-5, button.project-success.btn-do.project-btn-shaddow.btn-model-6, button.project-success.btn-do.project-btn-shaddow.btn-model-8, button.project-success.btn-do.project-btn-shaddow.btn-model-9, button.project-success.btn-do.project-btn-shaddow.btn-model-10, button.project-success.btn-do.project-btn-shaddow.project-adicionar-cesta, button.project-hover.project-success.btn-do.project-btn-tabs, .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-left, .options-container .double-btn button.project-success.btn-do.btn-left.btn-model-7,
  .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-right,
  .options-container .double-btn button.project-success.btn-do.btn-right.btn-model-7, .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-periodos, .options-container .double-btn button.project-success.btn-do.btn-periodos.btn-model-7,
  .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.btn-dia-semana.btn-model-7,
  .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-recorrencia-assinatura,
  .options-container .double-btn button.project-success.btn-do.btn-recorrencia-assinatura.btn-model-7, button.project-success.btn-do.project-btn-tabs.btn-model-5, button.project-success.btn-do.btn-model-5.btn-model-7, button.project-success.btn-do.btn-model-6, button.project-hover.project-success.btn-do.btn-model-7, button.project-success.btn-do.btn-model-7.btn-model-8, button.project-success.btn-do.btn-model-7.btn-model-9, button.project-success.btn-do.btn-model-7.btn-model-10, button.project-success.btn-do.btn-model-7.project-adicionar-cesta, button.project-success.btn-do.project-btn-tabs.btn-model-8, button.project-success.btn-do.project-btn-tabs.btn-model-9, button.project-success.btn-do.project-btn-tabs.btn-model-10, button.project-success.btn-do.project-btn-tabs.project-adicionar-cesta, button.project-hover.project-success.btn-do.project-btn-filters, .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-left,
  .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-right, .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-periodos,
  .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-recorrencia-assinatura, button.project-success.btn-do.project-btn-filters.btn-model-5, button.project-success.btn-do.project-btn-filters.btn-model-6, button.project-success.btn-do.project-btn-filters.btn-model-8, button.project-success.btn-do.project-btn-filters.btn-model-9, button.project-success.btn-do.project-btn-filters.btn-model-10, button.project-success.btn-do.project-btn-filters.project-adicionar-cesta, button.project-hover.project-success.btn-do.project-btn-highlight, .project-loading button.project-hover.project-success.btn-do.status, .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-left, .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-left,
  .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-right,
  .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-right, .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-periodos, .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-periodos,
  .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-dia-semana,
  .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-dia-semana,
  .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-recorrencia-assinatura,
  .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-recorrencia-assinatura, .project-loading button.project-success.btn-do.status.btn-model-5, .project-loading button.project-success.btn-do.status.btn-model-6, .project-loading button.project-success.btn-do.status.btn-model-8, .project-loading button.project-success.btn-do.status.btn-model-9, .project-loading button.project-success.btn-do.status.btn-model-10, .project-loading button.project-success.btn-do.status.project-adicionar-cesta, .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-left, .options-container .double-btn button.project-success.btn-do.btn-left.project-alerts,
  .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-right,
  .options-container .double-btn button.project-success.btn-do.btn-right.project-alerts, .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-periodos, .options-container .double-btn button.project-success.btn-do.btn-periodos.project-alerts,
  .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.btn-dia-semana.project-alerts,
  .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-recorrencia-assinatura,
  .options-container .double-btn button.project-success.btn-do.btn-recorrencia-assinatura.project-alerts, button.project-success.btn-do.project-btn-highlight.btn-model-5, button.project-success.btn-do.btn-model-5.project-alerts, button.project-success.btn-do.project-btn-highlight.btn-model-6, button.project-success.btn-do.btn-model-6.project-alerts, button.project-success.btn-do.project-btn-highlight.btn-model-8, button.project-success.btn-do.btn-model-8.project-alerts, button.project-success.btn-do.project-btn-highlight.btn-model-9, button.project-success.btn-do.btn-model-9.project-alerts, button.project-success.btn-do.project-btn-highlight.btn-model-10, button.project-success.btn-do.btn-model-10.project-alerts, button.project-hover.project-success.btn-do.project-alerts, button.project-success.btn-do.project-alerts.project-adicionar-cesta, button.project-success.btn-do.project-btn-highlight.project-adicionar-cesta, button.project-hover.project-success.btn-do.project-btn-translucid, .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-left,
  .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-right, .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-periodos,
  .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-recorrencia-assinatura, button.project-success.btn-do.project-btn-translucid.btn-model-5, button.project-success.btn-do.project-btn-translucid.btn-model-6, button.project-success.btn-do.project-btn-translucid.btn-model-8, button.project-success.btn-do.project-btn-translucid.btn-model-9, button.project-success.btn-do.project-btn-translucid.btn-model-10, button.project-success.btn-do.project-btn-translucid.project-adicionar-cesta, .options-container .double-btn button.project-success.btn-do.btn-left,
  .options-container .double-btn button.project-success.btn-do.btn-right, .options-container .double-btn button.project-success.btn-do.btn-periodos,
  .options-container .double-btn button.project-success.btn-do.btn-dia-semana,
  .options-container .double-btn button.project-success.btn-do.btn-recorrencia-assinatura, button.project-success.btn-do.btn-model-7.btn-model-6, button.project-success.btn-do.btn-model-8, button.project-success.btn-do.btn-model-9, button.project-success.btn-do.btn-model-10 {
    background-color: #fff;
    color: #61C835;
    text-transform: none;
    border-radius: 2px;
    border: 1px solid #ccc !important;
    padding: 15px 25px;
    margin: 0 0 25px 0 !important; }
    button.project-btn.project-hover.project-success.btn-do:hover, .project-footer button.project-hover.project-success.btn-do.project-btn-news-footer:hover, .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-left:hover, .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-left:hover,
    .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-right:hover,
    .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-right:hover, .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-periodos:hover, .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-periodos:hover,
    .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-dia-semana:hover,
    .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-dia-semana:hover,
    .project-footer .options-container .double-btn button.project-success.btn-do.project-btn-news-footer.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-footer button.project-success.btn-do.project-btn-news-footer.btn-recorrencia-assinatura:hover, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-5:hover, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-6:hover, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-8:hover, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-9:hover, .project-footer button.project-success.btn-do.project-btn-news-footer.btn-model-10:hover, .project-footer button.project-success.btn-do.project-btn-news-footer.project-adicionar-cesta:hover, button.project-hover.project-success.btn-do.project-btn-big:hover, .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-left:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-right:hover, .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-periodos:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-big.btn-recorrencia-assinatura:hover, button.project-success.btn-do.project-btn-big.btn-model-5:hover, button.project-success.btn-do.project-btn-big.btn-model-6:hover, button.project-success.btn-do.project-btn-big.btn-model-8:hover, button.project-success.btn-do.project-btn-big.btn-model-9:hover, button.project-success.btn-do.project-btn-big.btn-model-10:hover, button.project-success.btn-do.project-adicionar-cesta:hover, button.project-hover.project-success.btn-do.project-btn-shaddow:hover, .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-left:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-right:hover, .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-periodos:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-shaddow.btn-recorrencia-assinatura:hover, button.project-success.btn-do.btn-model-5:hover, button.project-success.btn-do.project-btn-shaddow.btn-model-6:hover, button.project-success.btn-do.project-btn-shaddow.btn-model-8:hover, button.project-success.btn-do.project-btn-shaddow.btn-model-9:hover, button.project-success.btn-do.project-btn-shaddow.btn-model-10:hover, button.project-success.btn-do.project-btn-shaddow.project-adicionar-cesta:hover, button.project-hover.project-success.btn-do.project-btn-tabs:hover, .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-left:hover, .options-container .double-btn button.project-success.btn-do.btn-left.btn-model-7:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-right:hover,
    .options-container .double-btn button.project-success.btn-do.btn-right.btn-model-7:hover, .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-periodos:hover, .options-container .double-btn button.project-success.btn-do.btn-periodos.btn-model-7:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.btn-dia-semana.btn-model-7:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-tabs.btn-recorrencia-assinatura:hover,
    .options-container .double-btn button.project-success.btn-do.btn-recorrencia-assinatura.btn-model-7:hover, button.project-success.btn-do.project-btn-tabs.btn-model-5:hover, button.project-success.btn-do.btn-model-5.btn-model-7:hover, button.project-success.btn-do.btn-model-6:hover, button.project-hover.project-success.btn-do.btn-model-7:hover, button.project-success.btn-do.btn-model-7.btn-model-8:hover, button.project-success.btn-do.btn-model-7.btn-model-9:hover, button.project-success.btn-do.btn-model-7.btn-model-10:hover, button.project-success.btn-do.btn-model-7.project-adicionar-cesta:hover, button.project-success.btn-do.project-btn-tabs.btn-model-8:hover, button.project-success.btn-do.project-btn-tabs.btn-model-9:hover, button.project-success.btn-do.project-btn-tabs.btn-model-10:hover, button.project-success.btn-do.project-btn-tabs.project-adicionar-cesta:hover, button.project-hover.project-success.btn-do.project-btn-filters:hover, .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-left:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-right:hover, .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-periodos:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-filters.btn-recorrencia-assinatura:hover, button.project-success.btn-do.project-btn-filters.btn-model-5:hover, button.project-success.btn-do.project-btn-filters.btn-model-6:hover, button.project-success.btn-do.project-btn-filters.btn-model-8:hover, button.project-success.btn-do.project-btn-filters.btn-model-9:hover, button.project-success.btn-do.project-btn-filters.btn-model-10:hover, button.project-success.btn-do.project-btn-filters.project-adicionar-cesta:hover, button.project-hover.project-success.btn-do.project-btn-highlight:hover, .project-loading button.project-hover.project-success.btn-do.status:hover, .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-left:hover, .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-left:hover,
    .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-right:hover,
    .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-right:hover, .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-periodos:hover, .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-periodos:hover,
    .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-dia-semana:hover,
    .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-dia-semana:hover,
    .project-loading .options-container .double-btn button.project-success.btn-do.status.btn-recorrencia-assinatura:hover,
    .options-container .double-btn .project-loading button.project-success.btn-do.status.btn-recorrencia-assinatura:hover, .project-loading button.project-success.btn-do.status.btn-model-5:hover, .project-loading button.project-success.btn-do.status.btn-model-6:hover, .project-loading button.project-success.btn-do.status.btn-model-8:hover, .project-loading button.project-success.btn-do.status.btn-model-9:hover, .project-loading button.project-success.btn-do.status.btn-model-10:hover, .project-loading button.project-success.btn-do.status.project-adicionar-cesta:hover, .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-left:hover, .options-container .double-btn button.project-success.btn-do.btn-left.project-alerts:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-right:hover,
    .options-container .double-btn button.project-success.btn-do.btn-right.project-alerts:hover, .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-periodos:hover, .options-container .double-btn button.project-success.btn-do.btn-periodos.project-alerts:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.btn-dia-semana.project-alerts:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-highlight.btn-recorrencia-assinatura:hover,
    .options-container .double-btn button.project-success.btn-do.btn-recorrencia-assinatura.project-alerts:hover, button.project-success.btn-do.project-btn-highlight.btn-model-5:hover, button.project-success.btn-do.btn-model-5.project-alerts:hover, button.project-success.btn-do.project-btn-highlight.btn-model-6:hover, button.project-success.btn-do.btn-model-6.project-alerts:hover, button.project-success.btn-do.project-btn-highlight.btn-model-8:hover, button.project-success.btn-do.btn-model-8.project-alerts:hover, button.project-success.btn-do.project-btn-highlight.btn-model-9:hover, button.project-success.btn-do.btn-model-9.project-alerts:hover, button.project-success.btn-do.project-btn-highlight.btn-model-10:hover, button.project-success.btn-do.btn-model-10.project-alerts:hover, button.project-hover.project-success.btn-do.project-alerts:hover, button.project-success.btn-do.project-alerts.project-adicionar-cesta:hover, button.project-success.btn-do.project-btn-highlight.project-adicionar-cesta:hover, button.project-hover.project-success.btn-do.project-btn-translucid:hover, .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-left:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-right:hover, .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-periodos:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.project-btn-translucid.btn-recorrencia-assinatura:hover, button.project-success.btn-do.project-btn-translucid.btn-model-5:hover, button.project-success.btn-do.project-btn-translucid.btn-model-6:hover, button.project-success.btn-do.project-btn-translucid.btn-model-8:hover, button.project-success.btn-do.project-btn-translucid.btn-model-9:hover, button.project-success.btn-do.project-btn-translucid.btn-model-10:hover, button.project-success.btn-do.project-btn-translucid.project-adicionar-cesta:hover, .options-container .double-btn button.project-success.btn-do.btn-left:hover,
    .options-container .double-btn button.project-success.btn-do.btn-right:hover, .options-container .double-btn button.project-success.btn-do.btn-periodos:hover,
    .options-container .double-btn button.project-success.btn-do.btn-dia-semana:hover,
    .options-container .double-btn button.project-success.btn-do.btn-recorrencia-assinatura:hover, button.project-success.btn-do.btn-model-7.btn-model-6:hover, button.project-success.btn-do.btn-model-8:hover, button.project-success.btn-do.btn-model-9:hover, button.project-success.btn-do.btn-model-10:hover {
      background-color: #DEDEDE;
      border-color: #696969; }

  .project-container.double-btn {
    padding: 0 15px; }

  .checkpoint-arrow {
    background: url("../assets/img/step-checkout-arrow.svg") no-repeat center bottom;
    background-size: 20px auto;
    position: absolute;
    z-index: 2000;
    width: 20px;
    height: 20px;
    margin-left: 250px;
    margin-top: -19px;
    transition: all ease-in .3s; }

  #checkout {
    height: 500px; }
    #checkout .options-container {
      margin-top: 0;
      height: 500px;
      min-height: unset;
      overflow: auto;
      padding: 0 50px; }
      #checkout .options-container .header {
        padding: 25px 0; }
        #checkout .options-container .header .icone {
          display: none; }
        #checkout .options-container .header .title {
          letter-spacing: 1px;
          font-size: 1.1em;
          font-family: "montserratbold", sans, serif;
          font-weight: 300; }
          #checkout .options-container .header .title h1 {
            letter-spacing: 1px; }
      #checkout .options-container .checkout-topics {
        letter-spacing: 1px;
        border-bottom: none;
        font-size: 0.6em;
        padding-top: 0;
        margin: 0; }
      #checkout .options-container .checkout-list {
        margin: 0 0 10px 0; }
        #checkout .options-container .checkout-list li {
          border-bottom: 1px solid rgba(129, 197, 250, 0.4);
          font-size: 0.7em;
          padding: 7px 0; }
        #checkout .options-container .checkout-list li a {
          font-size: 0.9em;
          color: #071543;
          padding: 14px 0; }
        #checkout .options-container .checkout-list li a:hover {
          background-color: rgba(129, 197, 250, 0.2); }
        #checkout .options-container .checkout-list.enderecos li a:before {
          background: url("../assets/img/icone-localizacao-azul-claro.svg") no-repeat center;
          background-size: 20px;
          margin-bottom: 30px; }
      #checkout .options-container .btn-model-1 {
        background-color: #071543;
        color: #fff;
        font-size: 0.6em;
        letter-spacing: 2px; }
        #checkout .options-container .btn-model-1 span:before {
          background: url("../assets/img/icone-add-endereco-white.svg") no-repeat center;
          background-size: 22px; }
        #checkout .options-container .btn-model-1:hover {
          background-color: #0c2371;
          color: #fff; }

  #desktop-slider-checkout {
    border: 1px solid #bbb;
    box-shadow: 0 3px 10px 0 #696969;
    min-height: unset;
    height: 500px; }
    #desktop-slider-checkout .slick-prev,
    #desktop-slider-checkout .slick-next {
      display: none !important;
      background: #071543;
      width: 125px;
      height: auto;
      z-index: 1000;
      padding: 15px 25px; }
      #desktop-slider-checkout .slick-prev:before,
      #desktop-slider-checkout .slick-next:before {
        font-family: "montserratbold";
        text-transform: uppercase;
        border: 1px solid red;
        font-size: 12px;
        letter-spacing: 2px; }
      #desktop-slider-checkout .slick-prev:hover,
      #desktop-slider-checkout .slick-next:hover {
        background-color: #0c2371; }
    #desktop-slider-checkout .slick-prev {
      left: -145px;
      background: #071543 url("../assets/img/icone-seta-esquerda-branca.svg") no-repeat 10px center;
      background-size: 15px; }
      #desktop-slider-checkout .slick-prev:before {
        content: "Anterior"; }
    #desktop-slider-checkout .slick-next {
      left: unset;
      right: -145px;
      background: #071543 url("../assets/img/icone-seta-direita-branca.svg") no-repeat right 10px center;
      background-size: 15px; }
      #desktop-slider-checkout .slick-next:before {
        content: "Próximo"; }
    #desktop-slider-checkout .btn-left,
    #desktop-slider-checkout .btn-right {
      margin-top: 0 !important; }

  .check-pass-desktop {
    margin-top: -25px !important; }

  #carrinho-desktop {
    margin-top: 150px; }

  #get-content-cupom .gs-linha:nth-child(2) .gs-coluna-9 .summary-coupon {
    font-size: 0.8em;
    width: 80%;
    color: #071543; }

  #get-content-cupom .gs-linha:nth-child(2) .gs-coluna-3 a {
    border-color: #81C5FA !important;
    color: #81C5FA !important;
    font-size: 0.6em !important; }
    #get-content-cupom .gs-linha:nth-child(2) .gs-coluna-3 a:hover {
      border-color: #071543 !important;
      color: #071543 !important; }

  #desktop-fracionar-entrega span,
  #desktop-fracionar-entrega label,
  #desktop-fracionar-entrega input {
    font-size: 0.7em; }
  #desktop-fracionar-entrega input {
    color: #071543; }

  #desktop-checkout-list {
    font-size: 0.7em; }
    #desktop-checkout-list div.list-box {
      padding: 10px 20px;
      border-bottom: 1px solid rgba(129, 197, 250, 0.4); }

  .project-btn-news-footer {
    padding: 25px 35px !important; }

  .banners-grid-shaddow a:hover img {
    box-shadow: 0 0 20px -2px #696969; }

  .project-cadastro-steps {
    color: #696969ad; }

  /**
    * Menu desktop Ativo
  */
  .desktop-loja-active {
    color: #81C5FA !important;
    font-family: "montserratbold", sans, serif; }

  .project-loading {
    width: 50%;
    margin-top: 10%;
    background-color: #071543;
    color: #fff; }
    .project-loading .messages a {
      color: #fff;
      border: 2px solid #fff; }
      .project-loading .messages a:hover {
        background: #fff;
        color: #071543; }

  /**
    * Esqueci minha senha
  */
  .forgot-pass {
    margin: 0;
    display: block;
    text-align: center; }
    .forgot-pass a {
      display: inline-block;
      padding: 8px;
      font-size: 12px;
      background: #cccccc59;
      border-radius: 4px;
      margin: 15px auto 0 auto;
      color: #616088;
      text-decoration: none; }
      .forgot-pass a:hover {
        background: #051344;
        color: #fff; }

  .project-btn-highlight-alert a.inline-status-btn, .project-alerts a.inline-status-btn,
  .project-btn-highlight-alert a,
  .project-alerts a {
    color: #F02B39; }

  .project-loading .messages a.inline-status-btn {
    padding: 5px;
    font-size: 14px;
    border: 1px solid #fff; } }
</style>

<!-- Carrossel -->

<link rel="stylesheet" type="text/css" href="../admin/app/vendor__components/slick-master/slick.css">
<link rel="stylesheet" type="text/css" href="../admin/app/vendor__components/slick-master/slick-theme.css">







	

</head>

<body>


<!-- controla retornos dos slides -->
<input type="hidden" name="menu-horizontal-navigation-ref" id="menu-horizontal-navigation-ref" value="" />

<div class="project-max-width" id="not-blur">

<div class="project-overflow-screen-dark">

	<div class="project-max-width">
		<div class="project-loading-dark" style="visibility:hidden">
			
			<div class="gs-linha">
				<div class="gs-coluna gs-coluna-12">
					<div class="messages-dark">
					
						
						
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	
</div>	
		
	
	
<div class="project-overflow-screen">

	<div class="project-max-width">
		<div class="project-loading" style="visibility:hidden">
			
			<div class="gs-linha">
				<div class="gs-coluna gs-coluna-12">
					<div class="gs-linha">
					
						<div class="gs-coluna gs-coluna-9">
							<div class="messages">&nbsp;</div>
						</div>
						
						<div class="gs-coluna gs-coluna-3">
							<div class="status">&nbsp;</div>
						</div>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	
</div>	
	
	
<div id="hide-menu" data-gs-display="mobile">
	
<div class="project-float-menu">
	
<div class="gs-linha">
	
	<div class="gs-coluna gs-coluna-3">&nbsp;</div>
	<div class="gs-coluna gs-coluna-9">
	
		<div id="menu-horizontal-navigation">
	
		
			
		<!-- Slide 1 -->
			
		<div>
		
		<nav class="project-side-navigation" style="margin-left:10px">	
			
		<ul>
			<li class="project-sn-bg-l1" style="height:46px">
				<div class="gs-linha gs-fmedium">
					<div class="gs-coluna gs-coluna-10">
											</div>
					<div class="gs-coluna gs-coluna-2 gs-right">
						<a href="javascript:petropolis__closeNav();" class="project-float-end-nav"><img src="../assets/img/icone-seta-esquerda.svg" alt="Voltar"></a>
					</div>
				</div>
			</li>

			<li>
				<!-- <a href="../index.php" class="project-sn-bg-l1 project-sn-hover"> -->
				<a href="../index.php" class="project-sn-bg-l1 project-sn-hover">
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-home.svg" alt="Home Page" />
					</div>
					<div class="gs-coluna gs-coluna-10 gs-toupper">
						<span>Home</span>
					</div>
				</div>
				</a>
			</li>
			
			
			<li>
				<a href="../loja/index.php" class="project-sn-bg-l1 project-sn-hover">
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-carrinho-loja.svg" alt="Loja Petrópolis Paulista">
					</div>
					<div class="gs-coluna gs-coluna-10 gs-toupper">
						<span>Loja</span>
					</div>
				</div>
				</a>
			</li>

			<li>
				
									
					<a href="../loja/login.php" class="project-sn-bg-l1 project-sn-hover">	
						
								
				
				
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-meu-espaco.svg" alt="Meu Espaço | Login">
					</div>
					<div class="gs-coluna gs-coluna-8 gs-toupper">
						<span>Meu Espaço</span>
					</div>
					<div class="gs-coluna gs-coluna-2 gs-right">
						<span style="padding-left:0;padding-right:0"><img src="../assets/img/icone-seta-direita.svg" alt="Navegar" style="height:18px" /></span>
					</div>
				</div>
				</a>
			</li>

			<li>
				<a href="#" class="project-sn-bg-l1 project-sn-hover" data-slide="3">
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-garrafa-a-petropolis.svg" alt="Águas Petrópolis Paulista">
					</div>
					<div class="gs-coluna gs-coluna-8 gs-toupper">
						<span>A Petrópolis</span>
					</div>
					<div class="gs-coluna gs-coluna-2 gs-right">
						<span style="padding-left:0;padding-right:0"><img src="../assets/img/icone-seta-direita.svg" alt="Navegar" style="height:18px" /></span>
					</div>
				</div>
				</a>
			</li>
			
			<li>
				<a href="../alka/" class="project-sn-bg-l1 project-sn-hover">
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-alka.svg" alt="ALKA+9.1">
					</div>
					<div class="gs-coluna gs-coluna-8 gs-toupper">
						<span>ALKA+9.1</span>
					</div>
				</div>
				</a>
			</li>

			
			
		</ul>
		
		</nav>	
			
		</div>

		<!-- Fim Slide 1 -->
			
		<!-- Slide 2 -->

		<div>
		
		<nav class="project-side-navigation" style="margin-left:10px">	
			
		<ul>

			<li>
				<a href="#" class="project-sn-bg-l2-active" data-slide="1">
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-meu-espaco-active.svg" alt="Meu Espaço | Login">
					</div>
					<div class="gs-coluna gs-coluna-8 gs-toupper project-color-complementar">
						<span>Meu Espaço</span>
					</div>
					<div class="gs-coluna gs-coluna-2 gs-right">
						<img src="../assets/img/icone-seta-esquerda.svg" alt="Navegar" />
					</div>
				</div>
				</a>


				<ul class="project-sn-bg-l2">

					<li>

						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10 gs-toupper project-color-complementar">
								Planos
							</div>
						</div>

					</li>

					<!-- Criar plano desabilitado por enquanto -->
					
					<!-- <li>
						<a href="../admin/app/loja/setup-assinatura-cliente.php?m=1&a=0" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Criar novo plano
							</div>
						</div>
						</a>

					</li> -->

					<li>
						<a href="../loja/pedidos-e-assinaturas.php" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Editar planos
							</div>
						</div>
						</a>
					</li>


					<li>

						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10 gs-toupper project-color-complementar">
								Meus Dados
							</div>
						</div>

					</li>
					
					<li>
						<a href="../loja/meu-espaco.php" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Meu Espaço
							</div>
						</div>
						</a>
					</li>
					

					<li>
						<a href="../loja/contatos.php" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Contatos
							</div>
						</div>
						</a>
					</li>

					<li>
						<a href="../loja/enderecos.php" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Endereços
							</div>
						</div>
						</a>
					</li>

					<li>
						<a href="../loja/cartoes-credito.php" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Cartões de Crédito
							</div>
						</div>
						</a>
					</li>

					<li>
						<a href="../loja/pedidos-e-assinaturas.php" class="project-sn-hover">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Histórico de Pedidos
							</div>
						</div>
						</a>
					</li>

				</ul>

			</li>

		</ul>
			
		</nav>
			
		</div>
			
		<!-- Fim Slide 2 -->
		
		<!-- Slide 3 -->
			
		<div>
			
		<nav class="project-side-navigation" style="margin-left:10px">	
			<ul>
			<li>
				<a href="#" class="project-sn-bg-l2-active" data-slide="1">
				<div class="gs-linha gs-fsmall">
					<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
						<img src="../assets/img/icone-garrafa-a-petropolis-active.svg" alt="Águas Petrópolis Paulista">
					</div>
					<div class="gs-coluna gs-coluna-8 gs-toupper project-color-complementar">
						<span>A Petrópolis</span>
					</div>
					<div class="gs-coluna gs-coluna-2 gs-right">
						<img src="../assets/img/icone-seta-esquerda.svg" alt="Navegar" />
					</div>
				</div>
				</a>


				<ul class="project-sn-bg-l2">

					<li>
						<a href="../historia-aguas-petropolis-paulista.php" class="project-sn-hover" title="Águas Petrópolis Paulista">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								História
							</div>
						</div>
						</a>

					</li>

					<li>
						<a href="../fontanario.php" class="project-sn-hover" title="Fontanário">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Fontanário
							</div>
						</div>
						</a>
					</li>


					<li>
						<a href="../emporio.php" class="project-sn-hover" title="Empório">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Empório
							</div>
						</div>
						</a>
					</li>

					<li>
						<a href="../private-label.php" class="project-sn-hover" title="Private Label">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Private Label
							</div>
						</div>
						</a>
					</li>
					
					<li>
						<a href="../analise-de-qualidade.php" class="project-sn-hover" title="Análise de Qualidade">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Análise de Qualidade
							</div>
						</div>
						</a>
					</li>
					
					<li>
						<a href="../loja/fale-conosco.php" class="project-sn-hover" title="Fale com a Petrópolis Paulista">
						<div class="gs-linha gs-fsmall">
							<div class="gs-coluna gs-coluna-2 gs-coluna-offset-05">
								&nbsp;
							</div>
							<div class="gs-coluna gs-coluna-10">
								Fale Conosco
							</div>
						</div>
						</a>
					</li>

				</ul>

			</li>
			</ul>
			
			</nav>
		</div>
		
		<!-- Fim Slide 3 -->
			
			
		<!-- Slide 4 -->
			
		<div>
			<nav class="project-side-navigation" style="margin-left:10px">	
			<ul>
				<li class="project-sn-bg-l1" style="height:46px">
				<div class="gs-linha gs-fmedium">
					<div class="gs-coluna gs-coluna-10">
						&nbsp;
					</div>
					<div class="gs-coluna gs-coluna-2 gs-right">
						<a href="javascript:petropolis__slideBack('menu-horizontal-navigation','1');" class="project-float-end-nav"><img src="../assets/img/icone-seta-esquerda.svg" alt="Voltar"></a>
					</div>
				</div>
					
				<div class="project-slides">
			
					<header class="project-headers project-headers-dark">
						<div class="gs-linha gs-center">
							<div class="gs-coluna gs-coluna-12">
								<img src="../assets/img/icone-login.svg" alt="Login | Informe suas credenciais" style="height:30px;margin-left:auto;margin-right:auto">
								<h2 class="gs-fregular gs-toupper">Login</h2>
								<p class="gs-fsmall project-color-complementar">Informe suas credenciaiss</p>
							</div>
						</div>
					</header>
					
					<form method="post" enctype="application/x-www-form-urlencoded" action="../loja/login.php" class="project-forms">
						
						<div class="project-fspacing">
							<label for="itsme">Digite seu nome de usuário ou e-mail</label>
							<input type="text" name="itsme" id="itsme" autocomplete="on" tabindex="1" maxlength="155" />
						</div>
						<div class="project-fspacing">
							<label for="credentials">Senha de acesso</label>
							<input type="password" name="credentials" id="credentials" autocomplete="off" tabindex="2" maxlength="20" />
						</div>
						
						<div class="forgot-pass">
							<a href="../loja/login.php" title="Recuperar sua senha de acesso">Esqueci Minha Senha</a>
						</div>
						
						<br />
						
						<div class="gs-extra-line-spacing">
							<button type="submit" class="project-btn project-bg-success project-hover gs-toupper" style="width:100%;border:none;" tabindex="3">Acessar</button>
						</div>
						
						<br />
						
						<div>
							<button type="button"  class="project-btn project-bg-complementar project-hover gs-toupper" style="width:100%; border:none;" onclick="javascript:window.location.href='../loja/cadastro.php';">Crie sua Conta</button>
						</div>
						
						
					</form>

				
				</div>	
					
				</li>
			</ul>
			</nav>
		</div>
		
		<!-- Fim Slide 4 -->
			
		</div>
	
	
	</div>

</div>
</div>

</div>	
	
</div>

<header class="project-header project-bg-base-color" data-gs-display="mobile">
	<div class="project-max-width">
		<div class="project-container">
			<div class="gs-linha">

				<div class="gs-coluna gs-coluna-4">
					
										
					<a href="javascript:petropolis__openNav('3');" title="Fazer login na loja" class="login-menu-ref">
						<div class="project-hicon-left gs-toupper gs-fminimal">
							<div>
								<img src="../assets/img/icone-login.svg" alt="Login">
								<span>Login</span>
							</div>
						</div>
					</a>
					
										
				</div>

				<div class="gs-coluna gs-coluna-4">
					<div class="project-hicon-center gs-center">
						<div>
							<a href="../index.php" title="Voltar para a página inicial">
								<img src="../assets/img/desktop/marca-petropolis-white.png" alt="Petrópolis Paulista">
							</a>
						</div>
					</div>
				</div>
	
				<div class="gs-coluna gs-coluna-4 gs-right">
					
										
					
						<div class="project-hicon-right">
							<div>
								<a href="javascript:petropolis__openNav('0');" title="Abrir o menu"><img src="../assets/img/icone-menu.svg" alt="Menu" width="38" height="auto" /></a>
							</div>
						</div>
					
					
										
				</div>

			</div>
		</div>
	</div>
</header>


<!-- DESKTOP -->



<header data-gs-display="desktop" class="header-desktop dark" id="desktop-menu">
	
	<div class="desktop-container">
	
	<div class="gs-linha">
	
		<div class="gs-coluna gs-coluna-5">
		
			<ul class="gs-cell gs-middle">
				<li><a id="lk-loja-desktop" href="../loja/index.php">Loja</a></li>
				<li><a href="#" class="arrow" data-open="sub-meu-espaco">Meu Espaço</a>
				
					<ul data-subnav="meu-espaco">
						<li><a href="../loja/pedidos-e-assinaturas.php" title="Gerenciar pedidos e assinaturas">Meus Pedidos</a></li>
						<li><a href="../loja/meu-espaco.php" title="Gerenciar meus dados">Meus Dados</a></li>
					</ul>
				
				</li>
				<li><a href="#" class="arrow" data-open="sub-petropolis">A Petrópolis</a>
				
					<ul data-subnav="petropolis">
						<li><a href="../historia-aguas-petropolis-paulista.php" title="História Petrópolis Paulista">História</a></li>
						<li><a href="../fontanario.php" title="Fontanário">Fontanário</a></li>
						<li><a href="../emporio.php" title="Empório Petrópolis">Empório Petrópolis</a></li>
						<li><a href="../private-label.php" title="Private Label">Private Label</a></li>
						<li><a href="../analise-de-qualidade.php" title="Análise de Qualidade">Análise de Qualidade</a></li>
					</ul>
				
				</li>
			</ul>
			
		</div>
		
		<div class="gs-coluna gs-coluna-2 gs-center" style="height:1px">
		
			<a href="../index.php" title="Voltar para a página inicial" style="position:absolute;top:-22px;left: 21px;">
				<img src="../assets/img/desktop/marca-petropolis-dark.png" alt="Petrópolis Paulista" height="90" width="auto" id="desktop-marca" />
			</a>
			
		</div>
		
		<div class="gs-coluna gs-coluna-5 gs-right">
		
			<div class="gs-linha">
			
				<div class="gs-coluna gs-coluna-3 gs-right">
				
					<a href="../alka/" title="ALKA+9.1">
						<div class="gs-cell gs-middle menu-right">
							ALKA+9.1
						</div>
					</a>
					
				</div>
				
				<div class="gs-coluna gs-coluna-5 gs-coluna-offset-05 gs-right">
				
					
					<a href="../loja/fale-conosco.php" title="Fale com a Petrópolis Paulista">
						<div class="gs-cell gs-middle menu-right">
							Fale Conosco
						</div>
					</a>
					
					
					
				</div>
				
				<!-- <div class="gs-coluna gs-coluna-2 gs-center">
				
					
					<a href="#" title="Efetuar login">
					<div class="gs-cell gs-middle menu-right">
						&nbsp;
					</div>
					</a>
					
					
				</div> -->
				
				<div class="gs-coluna gs-coluna-4 gs-right">
				
					
										
					<a href="../loja/login.php" title="Efetuar login">
						<div class="gs-cell gs-middle menu-right menu-login">
							<span class="icone-login">Login</span>
						</div>
					</a>
					
										
					
										
					<a href="../loja/carrinho.php" title="Visualizar itens na cesta">
						<div class="project-floating-bubble project-bg-base-color">
							<div>
								<img src="../assets/img/icone-cesta.svg" alt="Cesta de Compras" id="icone-cesta" />
							</div>
						</div>
					</a>

					<div class="project-total-products">

						<div id="cart-itens">
							0						</div>

					</div>
					
										
				</div>
			
			</div>
			
		</div>
		
		
	
	</div>
		
	</div>
	
	

</header>

<div class="project-max-width">		
	
	<div class="options-container project-container" style="background:#071543;">

		<div class="project-bg-base-color">
			<div class="gs-spacer" style="opacity:0.2"><span style="width:50%"></span></div>	
		</div>

		<header class="project-headers project-headers-dark">
			<div class="gs-linha gs-center">
				<div class="gs-coluna gs-coluna-12">
					<div data-gs-display="mobile">
						<img src="../assets/img/icone-login.svg" alt="Login | Informe suas credenciais" style="height:30px;margin-left:auto;margin-right:auto">
					</div>
					
					<div data-gs-display="desktop">
						<img src="../assets/img/icone-login-dark.svg" alt="Login | Informe suas credenciais" style="height:30px;margin-left:auto;margin-right:auto">
					</div>
					
					<h2 class="gs-fregular gs-toupper">Login</h2>
					
					<p class="gs-fsmall project-color-complementar">Informe suas credenciais</p>
					
					
										
				</div>
			</div>
		</header>

		<form method="POST" enctype="application/x-www-form-urlencoded" class="project-forms">
		<input type="hidden" id="back-to" name="back-to" value="" />
			
			<div class="project-fspacing">
				<label for="itsme">Digite seu nome de usuário ou e-mail</label>
				<input type="text" name="itsme" id="itsme" autocomplete="on" tabindex="1" maxlength="155">
			</div>
			<div class="project-fspacing">
				<label for="credentials">Senha de acesso</label>
				<input type="password" name="credentials" id="credentials" autocomplete="off" tabindex="2" maxlength="20">
			</div>
			
			<div class="forgot-pass">
				<a href="javascript:petropolis__forgotPassword('start');" title="Recuperar sua senha de acesso">Esqueci Minha Senha</a>
			</div>
			
			<div id="default-buttons">

			<div class="gs-extra-line-spacing">
				<button type="submit" class="project-btn project-bg-success project-hover gs-toupper btn-login-screen" style="width:100%;border:none;" tabindex="3">Acessar</button>
			</div>

			<div>
				<button type="button" class="project-btn project-bg-complementar project-hover gs-toupper" style="width:100%; border:none;" onclick="javascript:window.location.href='../loja/cadastro.php';" tabindex="0">Crie sua Conta</button>
			</div>
				
			</div>
			
			<div id="recovery-buttons" style="display:none">

			<div class="gs-extra-line-spacing">
				<button type="button" class="project-btn project-bg-success project-hover gs-toupper btn-login-screen" style="width:100%;border:none;" tabindex="3" onclick="javascript:petropolis__forgotPassword('recover');">Recuperar Senha</button>
			</div>

			<div>
				<button type="button" class="project-btn project-bg-complementar project-hover gs-toupper" style="width:100%; border:none;" onclick="javascript:petropolis__forgotPassword('reset');" tabindex="0">Voltar</button>
			</div>
				
			</div>
			

		</form>

	</div>

</div>

<script src="../admin/assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="../admin/assets/js/script.js?v=220220070433" type="text/javascript" charset="utf-8"></script>
<script src="../assets/js/scripts.js?v=220220070433" type="text/javascript" charset="utf-8"></script>

<script src="../admin/app/vendor__components/slick-master/slick.min.js" type="text/javascript" charset="utf-8"></script>


<!-- Start of petropolispaulista JivoChat Widget script -->
<script type='text/javascript'>
(function(){ var widget_id = 'O3vhyvaDQl';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- End of petropolispaulista JivoChat Widget script -->

<!-- tagueamento -->
<script src="../assets/js/samus_tags.js" type="text/javascript" charset="utf-8"></script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PMFTQM');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMFTQM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Push de Alka -->
<script>
document.addEventListener("DOMContentLoaded", function(event) {
   if( document.querySelector('.push-alka') ){
	   window.setTimeout(function(){
		 document.querySelector('.push-alka').classList.add('push-show');  
	   },2000);	   
   }
});
</script>
<!-- Push de Alka -->

		


</body>
</html>
