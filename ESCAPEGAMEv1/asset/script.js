var left = -500;
document.querySelector('#background').style.left = left.toString() + "px";

majecouteur();

function majecouteur() {
    document.querySelector('#fleche_gauche').addEventListener('click', gauche, false);
    document.querySelector('#fleche_droite').addEventListener('click', droite, false);

    document.querySelector('.ecran').addEventListener('click', function () { apparait("#ecran_verouille"); }, true);

    document.querySelector('#i_validerecran').addEventListener('click', function () { ecran(); }, true);
    document.querySelector('#i_validertel').addEventListener('click', function () { telephone(); }, true);
    document.querySelector('.sac').addEventListener('click', function () { apparait("#sac"); }, true);
    document.querySelector('.telephone').addEventListener('click', function () { apparait("#telephone"); }, true);
    document.querySelector('.imprimante').addEventListener('click', function () { apparait("#imprimante"); }, true);
    document.querySelector('.feuille').addEventListener('click', function () { apparait("#feuille"); }, true);
    document.querySelector('.poubelle').addEventListener('click', function () { apparait("#poubelle"); }, true);
    document.querySelector('.boule_papier').addEventListener('click', function () { apparait("#boule_papier"); }, true);
}
function init() {
    if (left == 0) { document.querySelector('#fleche_gauche').style.display = 'none'; }
    else { document.querySelector('#fleche_gauche').style.display = ''; }
    if (left == -1400) { document.querySelector('#fleche_droite').style.display = 'none'; }
    else { document.querySelector('#fleche_droite').style.display = ''; }

}

function divinit() {
    napparaitpas("#sac");
    napparaitpas("#telephone");
    napparaitpas("#imprimante");
    napparaitpas("#feuille");
    napparaitpas("#poubelle");
    napparaitpas("#boule_papier");
    napparaitpas("#ecran_fichier");
    napparaitpas("#ecran_verouille");
}