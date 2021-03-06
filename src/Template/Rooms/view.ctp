<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
    </table>
     
<div class="showtimes index large-9 medium-8 columns content">
    <h3><?= __('Planning de la semaine') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Lundi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mardi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mercredi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Jeudi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vendredi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Samedi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dimanche') ?></th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($items as $item): ?>
                <td></td>
            <?php endforeach ?>
            <?php foreach ($showtimes as $showtime): ?>
            <tr>
                <td><?= $showtime->has('movie') ? $this->Html->link($showtime->movie->name, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td> 
                <td><?= h($showtime->start) ?></td>
                <td><?= h($showtime->end) ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
