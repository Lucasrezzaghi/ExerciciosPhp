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
		$contador = 0;
		$palavras = '';
		$remove = -1;
		$ans = array();
		// se a string for vazia retorna null
		if ($n == 0) {
			return [NULL];
		}
		for ($i = 0;$i < $n; $i++) {
			// adiciona uma letra por vez na variavel palavra
			$palavras .= $text[$i];
			// contador de letras adicionadas
			$contador++;
			// se a letra for um espaco
			if ($text[$i] == ' ') {
				// guarda a posicao do ultimo espaco
				$espaco = $i;
				// se o numero de letras adicionas for igual ao limite da linha
				if ($contador == $length) {
					// adiciona a palavra ao array
					array_push($ans, $palavras);
					// zera o contador e reinicia a string palavras para poder adicionar uma proxima palavra ao array
					$contador = 0;
					$palavras = '';
				}
				// se a palavra for maior que o limite
				elseif ($contador > $length) {
					// conta quantos caracteres a mais desde o ultimo espaco, remove e adiciona na string palavras
					for ($j = $contador; $j >= $espaco; $j--) {
						$remove++;
						if ($j == $espaco) {
							substr($palavras, 0, - $remove);
							// adiciona a palavra ao array
							array_push($ans, $palavras);
							// zera o contador e reinicia a string palavras para poder adicionar uma proxima palavra ao array
							$contador = 0;
							$palavras = '';
						}
					}
				}
			}
		}
		return $ans;
	}  
}

