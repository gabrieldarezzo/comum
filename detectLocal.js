if(window.location.hostname.indexOf('localhost') !== -1){
	const AMBIENTE_TESTE = true;
} else {
	const AMBIENTE_TESTE = false;
}

console.log(AMBIENTE_TESTE);