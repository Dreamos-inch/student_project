

//create option object witch contains chart settings
var options = {
    chart: {
      type: 'line'
    },
    series: [{
      name: 'Alex',
      data: [120,130,135,140,150,166,180,185,190]
    }],
    xaxis: {
      categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
    }
  }
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
  
  
  
  
  
  
  
  

  
  
  //Create option object to setup chart settings

let options ={
stroke: {
  curve: 'stepline',
},
  markers: {
    size: 5,
},
    chart:{
       background: '#4d65d8',
        // will set chart type to line
        type: 'line',
        foreColor: '#373d3f',
      colors:"#fff"
      
    },
  dataLabels: {
  enabled: false},

    series :[
 //will contain our serie name and data
 // Let's create paired values first will be on x axis second on y axis
         {
           type:'line',
            name: 'Alex',
            data :[[120,130], [135, 140], [150, 166], [180, 185], [190,200]] // this will be the Alex's heigth 
        },
      {
        type: 'column',
         data :[[120,130], [135, 140], [150, 166], [180, 185], [190,200]]
      }
    ],

    xaxis:{ //will store point of our x axis the year when alex grow 
        type: 'numeric'
    }

}

let chart = new ApexCharts(document.querySelector("#chart"), options) // this will create Apex object with option settings #chart is the html element where to display
chart.render();