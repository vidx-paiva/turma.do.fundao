function simularFalha() {
    const status = document.getElementById("status");

    alert("⚠️ Sistema entrou em ENTROPIA!");

    status.innerText = "Status: EM FALHA";
    status.style.color = "red";
}