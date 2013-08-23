wp-eventick-shortcodes
======================

Integre o Eventick em seu site WordPress e venda ingressos online!

## Como Usar
1. Copie a pasta `wp-eventick-shortcodes` para a pasta `plugins`
2. No Painel Administrativo do WordPress, acesse Plugins e ative o plugin Eventick Shortcodes

## Como Adicionar o Shortcode
Na página de edição de posts ou páginas, adicione o código a seguir:

	[eventick url="http://eventick.com.br/seu-evento"]

Substitua `seu-evento` pelo slug que o Eventick gerou para seu evento.

## Adicionando o botão

	[eventick url="http://eventick.com.br/seu-evento" type="button"]

## Adicionando o box de venda de ingressos

	[eventick url="http://eventick.com.br/seu-evento" type="tickets"]

## Configurações disponíveis

### Box de Venda de Ingressos

	* **width:** largura do box
	* **height:** altura do box

### Botão

	* **size:** tamanho do botão
	* **label:** título do botão

Para maiores informações, leia o [http://developer.eventick.com.br/integracao](Guia de Integração do Eventick).
