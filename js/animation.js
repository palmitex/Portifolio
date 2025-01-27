document.addEventListener("DOMContentLoaded", () => {
    const blocks = document.querySelectorAll(".info-block");

    // Função que verifica se o elemento está visível na viewport
    const isInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return rect.top < window.innerHeight - 100; 
    };

    // Função para animar os elementos quando entram na tela
    const handleScroll = () => {
        blocks.forEach((block) => {
            if (isInViewport(block)) {
                gsap.to(block, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: "power1.out",
                });
            }
        });
    };

    // Ativa o evento de rolagem
    window.addEventListener("scroll", handleScroll);

    // Chama a função no carregamento inicial para elementos já visíveis
    handleScroll();
});
// Função para adicionar a classe 'visible' quando o elemento entra na tela
function handleScrollAnimations() {
  const elements = document.querySelectorAll(".foto, .section, .ferramentas, .texto, footer");

  elements.forEach(element => {
      const rect = element.getBoundingClientRect();
      if (rect.top <= window.innerHeight && rect.bottom >= 0) {
          element.classList.add("visible");
      } else {
          element.classList.remove("visible");
      }
  });
}

// Escuta o evento de rolagem
window.addEventListener("scroll", handleScrollAnimations);

handleScrollAnimations();
