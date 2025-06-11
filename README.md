# Filament Timeline

Este pacote adiciona uma página customizada ao Filament com uma timeline totalmente personalizável.

## Instalação

Adicione o pacote ao seu projeto Laravel:

```bash
composer require bosqro/timeline
```

## Publicação das views

Se desejar customizar a view da timeline, publique as views:

```bash
php artisan vendor:publish --tag="timeline-views"
```

## Configuração

1. Registre o plugin no seu painel Filament, normalmente em um ServiceProvider ou no `PanelProvider`:

```php
use Bosqro\Timeline\TimelinePlugin;

Filament::plugin(TimelinePlugin::class);
```

2. Acesse a página "Timeline" no menu do Filament para ver a timeline padrão.

## Como adicionar a timeline em um Resource já existente

Você pode incluir a timeline como uma página customizada dentro de qualquer Resource do Filament. Exemplo:

1. No seu resource, adicione a página customizada:

```php
use Bosqro\Timeline\Pages\TimelinePage;

class SeuResource extends Resource
{
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeuResource::class,
            'create' => Pages\CreateSeuResource::class,
            'edit' => Pages\EditSeuResource::class,
            'timeline' => TimelinePage::class, // Adiciona a página timeline ao resource
        ];
    }
}
```

2. Agora, a timeline estará disponível como uma rota/página dentro do seu resource, podendo ser acessada pelo menu ou via URL.

## Personalização

Você pode passar eventos, ícones, cores e outras opções para a timeline. Veja a documentação na página da timeline para exemplos de uso.

Se quiser customizar os dados, basta sobrescrever o array `$timelineEvents` na sua própria página customizada herdando de `TimelinePage`.

## Licença

MIT
