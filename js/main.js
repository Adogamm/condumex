var graficabarrascontexto=document.getElementById("grafica-barras");
var graficabarras=new Chart(graficabarrascontexto,{
    type:"bar",
    data:{
        labels:["1ro","2do","3ro","4to"],
        datasets:[{
            label: "Rendimiento por turno",
            data:[7,8,10,9],
            backgroundColor:[
                'rgb(66, 134, 244, 0.5)',
                'rgb(74, 135, 72, 0.5)',
                'rgb(229, 80, 72, 0.5)',
                'rgb(10, 180, 172, 0.5)',
            ]
        }]
    }
});

var graficalineascontexto=document.getElementById("grafica-lineas");
var graficalineas=new Chart(graficalineascontexto,{
    type:"line",
    data:{
      labels:["1ro","2do","3ro","4to"],
      datasets:[{
      label: "Velocidad de la maquína",
      data:[7,8,10,9],
      backgroundColor:[
        'rgb(66, 134, 244, 0.5)',
        'rgb(74, 135, 72, 0.5)',
        'rgb(229, 80, 72, 0.5)',
        'rgb(10, 180, 172, 0.5)',
      ]
    }]
  }
});
