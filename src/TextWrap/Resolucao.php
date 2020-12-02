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
		if( $length > 0 && mb_strlen($text) > 0){
			$string = '';
			$ans = array();
			$words = explode(" ", $text);
			$string .= $words[0];
			$sum = mb_strlen($words[0]);
			for ($i = 0; $i < count($words); $i++){
				if($i == 0) continue;
				$sum = mb_strlen($words[$i]) + $sum + 1;
				if ( mb_strlen($string) <= $length){
					if ($sum <= $length){
						$string .= ' ' . $words[$i];
					}
				}
				if ($sum > $length){
					array_push($ans, $string);
					$string = '';
					$string .= $words[$i];
					$sum = mb_strlen($words[$i]);
				}
			}
			return $ans;
		}
		else {
			return [""];
		}
	}
}




