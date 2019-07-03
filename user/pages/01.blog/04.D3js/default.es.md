---
title: D3.js
published: true
date: '03-07-2019 17:32'
publish_date: '03-07-2019 17:32'
---

######Esta libreria permite vincular datos arbitrarios a un modelo de objeto de documento (DOM) y luego aplicar transformaciones basadas en datos al documento. Por ejemplo, puede usar D3 para generar una tabla HTML a partir de una matriz de números.
===
######D3 no es un marco monolítico que busca proporcionar todas las características concebibles. En cambio, D3 resuelve el quid del problema: la manipulación eficiente de documentos basados en datos.

<script src="https://d3js.org/d3.v5.min.js"></script>
<script>

var svg = d3.select("svg"),
    width = +svg.attr("width"),
    height = +svg.attr("height"),
    angles = d3.range(0, 2 * Math.PI, Math.PI / 200);

var path = svg.append("g")
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")")
    .attr("fill", "none")
    .attr("stroke-width", 10)
    .attr("stroke-linejoin", "round")
  .selectAll("path")
  .data(["cyan", "magenta", "yellow"])
  .enter().append("path")
    .attr("stroke", function(d) { return d; })
    .style("mix-blend-mode", "darken")
    .datum(function(d, i) {
      return d3.radialLine()
          .curve(d3.curveLinearClosed)
          .angle(function(a) { return a; })
          .radius(function(a) {
            var t = d3.now() / 1000;
            return 200 + Math.cos(a * 8 - i * 2 * Math.PI / 3 + t) * Math.pow((1 + Math.cos(a - t)) / 2, 3) * 32;
          });
    });

d3.timer(function() {
  path.attr("d", function(d) {
    return d(angles);
  });
});

</script>