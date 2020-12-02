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
		$palavras = '';
		$ans = array();
		$espacos = 0;
		$words = explode(" ", $text);
		$n = sizeof($words);
		$palavras .= $words[0];
		$sum = mb_strlen($words[0]);
		// se a string for vazia retorna nulla
		if ($n == 0) {
			return [NULL];
		}
		for ($i = 1; $i < $n; $i++){
			$sum = mb_strlen($words[$i]) + $sum + 1;
			if ( mb_strlen($palavras) <= $length){
				if ($sum <= $length){
					$palavras .= ' ' . $words[$i];
				}
			}
			if ( mb_strlen($palavras) > $length || $sum > $length){
				array_push($ans, $palavras);
				$palavras .= $words[$i + 1];
				
			}
		}
		return $ans;
	}
}


		

