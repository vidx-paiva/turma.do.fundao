function carregarGrafico() {
    fetch("buscar_dados.php")
        .then(res => res.json())
        .then(dados => {

            console.log("DADOS:", dados); // 🔍 DEBUG

            const labels = dados.map(item => item.status);
            const valores = dados.map(item => item.total);

            const ctx = document.getElementById("grafico");

            if (!ctx) {
                console.error("Canvas NÃO encontrado!");
                return;
            }

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Status das Máquinas',
                        data: valores
                    }]
                }
            });
        })
        .catch(error => {
            console.error("Erro no fetch:", error);
        });
}

window.onload = carregarGrafico;



function simularFalha() {
    const status = document.getElementById("status");

    status.innerText = "Status: EM FALHA";
    status.style.color = "red";

    fetch("salvar.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            maquina: "Máquina 1",
            status: "falha"
        })
    })
    .then(response => response.text())
    .then(data => {
        console.log("Resposta do servidor:", data);

       
        carregarGrafico();
    })
    .catch(error => {
        console.error("Erro:", error);
    });
}


const botao = document.getElementById("toggleDark");

if (botao) {
    botao.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
}



window.onload = carregarGrafico;