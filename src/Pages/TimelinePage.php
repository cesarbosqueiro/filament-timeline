<?php

namespace Bosqro\Timeline\Pages;

use Filament\Pages\Page;

class TimelinePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static string $view = 'timeline::timeline';

    protected static ?string $title = 'Timeline';

    protected static ?string $navigationLabel = 'Timeline';

    protected static ?int $navigationSort = 1;

    // Exemplo de dados para a timeline (pode ser substituído por dados dinâmicos)
    public $timelineEvents = [
        [
            'date' => '2024-06-01',
            'title' => 'Início do Projeto',
            'description' => 'O projeto foi iniciado.',
            'icon' => 'heroicon-o-rocket-launch',
            'color' => 'bg-blue-500',
        ],
        [
            'date' => '2024-06-10',
            'title' => 'Primeira Entrega',
            'description' => 'Primeira versão entregue.',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'bg-green-500',
        ],
        [
            'date' => '2024-06-20',
            'title' => 'Feedback do Cliente',
            'description' => 'Recebido feedback inicial.',
            'icon' => 'heroicon-o-chat-bubble-left-ellipsis',
            'color' => 'bg-yellow-500',
        ],
    ];

    public function getViewData(): array
    {
        return [
            'timelineEvents' => $this->timelineEvents,
        ];
    }
}
