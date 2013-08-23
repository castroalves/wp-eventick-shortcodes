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

## Adicionando o botão do Eventick

	[eventick url="http://eventick.com.br/seu-evento" type="button"]

## Adicionando a venda de ingressos do Eventick

	[eventick url="http://eventick.com.br/seu-evento" type="tickets"]

## Configurações disponíveis

1. **width:** largura do box de venda de ingressos
2. **height:** altura do box de venda de ingressos
3. **size:** tamanho do botão
4. **label:** título do botão

Para maiores informações, leia o [http://developer.eventick.com.br/integracao](Guia de Integração do Eventick).
