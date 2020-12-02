<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução nessa classe.
 *
 * Depois disso:
 * - Crie um PR no github com seu código
 * - Veja o resultado da correção automática do seu código
 * - Commit até os testes passarem
 * - Passou tudo, melhore a cobertura dos testes
 * - Ficou satisfeito, envie seu exercício para a gente! <3
 *
 * Boa sorte :D
 */
class Resolucao implements TextWrapInterface {

	/**
	 * {@inheritdoc}
	 *
	 * Apague o conteúdo do método abaixo e escreva sua própria implementação,
	 * nós colocamos esse mock para poder rodar a análise de cobertura dos
	 * testes unitários.
	 */
	public function textWrap(string $text, int $length): array {
		$n = strlen($text);
		$sum = 0;
		$palavras = '';
		$ans = array();
		$words = explode(" ", $text);
		// se a string for vazia retorna null
		if ($n == 0) {
			return [NULL];
		}
		for ($i = 0; $i < $n; $i++){
			$sum =+ $words[$i];
			if ( $sum <= $length){
				$palavras .= $words[$i];
			}
			if ( $sum > $length){
				$sum = 0;
				array_push($ans, $palavras);
				$palavras = '';
				$i--;
			}
		}
		return $ans;
	}
}


		

