<!-- SEÇÃO hero-luxury-quote -->
    {% comment %}
    BAROZA PROJECT - Modern Luxury Blur Reveal
    Correção: Schema validado (limite de steps do Shopify)
    {% endcomment %}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
      /* Escopo Único */
      #shopify-section-hero_luxury_quote_LgzM6r .modern-hero-wrapper {
        background-color: #ffffff;
        overflow: hidden;
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 50vh;
        padding-top: 20px;
        padding-bottom: 0px;
      }

      #shopify-section-hero_luxury_quote_LgzM6r .modern-content {
        width: 100%;
        max-width: 1100px;
        padding: 0 24px;
        text-align: center;
        z-index: 1;
      }

      /* FRASE (SANS SERIF) */
      #shopify-section-hero_luxury_quote_LgzM6r .modern-quote {
        font-family: 'Manrope', sans-serif;
        font-weight: 400;
        color: #1b1b1b;
        line-height: 1.3;
        letter-spacing: -0.02em;
        margin: 0 auto;
        display: block;
        font-size: 32px;
        opacity: 1;
      }

      /* ASSINATURA */
      #shopify-section-hero_luxury_quote_LgzM6r .modern-author-block {
        margin-top: 3rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        opacity: 0;
      }

      #shopify-section-hero_luxury_quote_LgzM6r .modern-line {
        background-color: #d4af37;
        height: 1px;
        width: 0px;
        display: block;
        opacity: 0.6;
      }

      #shopify-section-hero_luxury_quote_LgzM6r .modern-author-name {
        font-family: 'Manrope', sans-serif;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        font-size: 0.7rem;
        color: #1b1b1b;
        opacity: 0.7;
        margin: 0;
      }

      /* CLASSES DO EFEITO BLUR */
      .blur-word {
        display: inline-block;
        white-space: nowrap;
        margin-right: 0.25em;
        will-change: transform, opacity, filter;
      }

      /* RESPONSIVIDADE DESKTOP */
      @media (min-width: 768px) {
        #shopify-section-hero_luxury_quote_LgzM6r .modern-hero-wrapper {
          min-height: 70vh;
          padding-top: 0px;
          padding-bottom: 0px;
        }

        #shopify-section-hero_luxury_quote_LgzM6r .modern-quote {
          font-size: 56px;
          max-width: 85%;
        }

        #shopify-section-hero_luxury_quote_LgzM6r .modern-author-name {
          font-size: 0.8rem;
        }
      }
    </style>

    <div class="modern-hero-wrapper">
      <div class="modern-content">
        <h2 class="modern-quote" aria-label="Não é apenas morar. É pertencer.">
          Não é apenas morar. É pertencer.
        </h2>
        <div class="modern-author-block">
          <span class="modern-line"></span>
          <p class="modern-author-name">Nathália Monteìro</p>
        </div>
      </div>
    </div>



    