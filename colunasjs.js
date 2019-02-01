function dimensionarColunas(colunas) {
   maior = 0;
   for (i = 0; i < colunas.length; i++) {
      alturaReal = document.getElementById(colunas[i]).offsetHeight;
      if (alturaReal > maior) {
         maior = alturaReal;
      }
   }
   for (i = 0; i < colunas.length; i++) {
      document.getElementById(colunas[i]).style.height = maior + "px";
   }
}

