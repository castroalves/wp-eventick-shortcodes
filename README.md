WordPress Eventick Shortcodes
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

### Gerais

- **url:** URL de seu evento. Valor padrão: `tickets`
- **type:** tipo de integração
    - **button:** botão de venda
    - **tickets:** box de venda de ingressos

### Box de Venda de Ingressos

- **width:** largura do box
- **height:** altura do box

### Botão

- **size:** tamanho do botão. Valor padrão: `m`.
    - **p:** pequeno
    - **m:** médio
    - **g:** grande

Exemplo:

    [eventick url="http://eventick.com.br/seu-evento" type="type" size="p"]

- **label:** título do botão. Valor padrão: `vaga`.
    - **vaga:** Exibe a mensagem *"Garanta sua vaga"*.
    - **ingresso:** Exibe a mensagem *"Compre seu ingresso"*
    - **inscreva:** Exibe a mensagem *"Inscreva-se já"*

Exemplo:

    [eventick url="http://eventick.com.br/seu-evento" type="type" label="vaga "]

### Mais Informações

Leia o [Guia de Integração do Eventick](http://developer.eventick.com.br/integracao).

Envie sugestões de melhorias pelos comentários.
