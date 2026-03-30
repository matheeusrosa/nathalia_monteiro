<!-- SEÇÃO header-cinematic -->
    <header class="header-absolute">
      <div class="header-wrapper">

        <a href="/" class="header-logo">
          <img src="./assets/logo.svg" class="logo-img">
        </a>

        <div class="nav-desktop">
          <nav>
            <ul class="nav-list">
              <li><a href="#" class="nav-link" style="animation-delay: 300ms;">INÍCIO</a></li>
              <li><a href="#" class="nav-link" style="animation-delay: 450ms;">CATÁLOGO</a></li>
              <li><a href="#" class="nav-link" style="animation-delay: 600ms;">CONTATO</a></li>
            </ul>
          </nav>


          <a href="https://wa.me/556696807956?text=" class="solid-btn" target="_blank" rel="noopener noreferrer">
            Agendar
            <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor"
                d="M0.479167 11.5C0.203024 11.5 -0.0208333 11.7239 -0.0208333 12C-0.0208333 12.2761 0.203024 12.5 0.479167 12.5V11.5ZM22.9231 12.3536C23.1184 12.1583 23.1184 11.8417 22.9231 11.6464L19.7411 8.46447C19.5459 8.2692 19.2293 8.2692 19.034 8.46447C18.8388 8.65973 18.8388 8.97631 19.034 9.17157L21.8625 12L19.034 14.8284C18.8388 15.0237 18.8388 15.3403 19.034 15.5355C19.2293 15.7308 19.5459 15.7308 19.7411 15.5355L22.9231 12.3536ZM0.479167 12.5H22.5696V11.5H0.479167V12.5Z">
              </path>
            </svg>
          </a>

        </div>

        <button class="mobile-trigger" onclick="toggleMenu()">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>

      </div>
    </header>

    <div class="sidebar-overlay" onclick="toggleMenu()"></div>
    <aside class="sidebar-panel">
      <button style="align-self: flex-end; background:none; border:none; font-size:28px; cursor:pointer;"
        onclick="toggleMenu()">&times;</button>

      <nav style="margin-top:40px;">
        <a href="#" class="sidebar-link" onclick="toggleMenu()">INÍCIO</a>
        <a href="#" class="sidebar-link" onclick="toggleMenu()">CATÁLOGO</a>
        <a href="#" class="sidebar-link" onclick="toggleMenu()">CONTATO</a>
      </nav>


      <div class="sidebar-cta-wrapper">
        <a href="https://wa.me/556696807956?text=" class="solid-btn" target="_blank" rel="noopener noreferrer">
          Agendar
          <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor"
              d="M0.479167 11.5C0.203024 11.5 -0.0208333 11.7239 -0.0208333 12C-0.0208333 12.2761 0.203024 12.5 0.479167 12.5V11.5ZM22.9231 12.3536C23.1184 12.1583 23.1184 11.8417 22.9231 11.6464L19.7411 8.46447C19.5459 8.2692 19.2293 8.2692 19.034 8.46447C18.8388 8.65973 18.8388 8.97631 19.034 9.17157L21.8625 12L19.034 14.8284C18.8388 15.0237 18.8388 15.3403 19.034 15.5355C19.2293 15.7308 19.5459 15.7308 19.7411 15.5355L22.9231 12.3536ZM0.479167 12.5H22.5696V11.5H0.479167V12.5Z">
            </path>
          </svg>
        </a>
      </div>

    </aside>



    