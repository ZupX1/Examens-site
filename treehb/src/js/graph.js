Chart.defaults.color = "#ffffff";

const chart1 = document.getElementById("chart1");

const barChart = new Chart(chart1, {
    type:"bar",
    data: {
        labels:["Bois de Boulogne","Bois de Vincennes","Arrondissements de Paris"],
        datasets: [{
            barThickness: 80,
            maxBarThickness: 100,
            minBarLength: 10,
            label:"Localisation des Arbres remarquables",
            data:[24,24,130],
            backgroundColor: [
                "rgb(255, 163, 26)"
            ],
            borderColor: [
                'rgb(255, 255, 255)',
              ],
              borderWidth: 3,
        }]
    },
    options:{
        scales:{
            y:{
                suggestedMax: 150
            }
        }
    }
})