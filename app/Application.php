<?php
/**
 * Этот файл является частью приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace App;

use Gm;
use Gm\Http\Response;

/**
 * Веб-приложение "GearMagic: Управление сайтом" (GM CMS).
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Application extends \Gm\Mvc\Application
{
    /**
     * {@inheritdoc}
     */
    public array $viewConfig = [
        'useTheme'    => true,
        'useLocalize' => true
    ];

    /**
     * {@inheritdoc}
     */
    public function routeNotFound(): void
    {
        /** @var \Gm\View\LayoutView $view */
        $view = Gm::$app->getLayoutView();
        /** @var \Gm\Url\UrlManager $url */
        $url = Gm::$app->urlManager;
        /** @var Response $response */
        $response = Gm::$app->response;

        // если запрос относится к веб-сайту
        if (IS_FRONTEND) {
            if ($url->isHome())
                $viewFile = 'layouts/main';
        }
        $response
            ->setFormat(Response::FORMAT_HTML)
            ->setContent(
                $view->render($viewFile ?? 'errors/404')
            )
            ->send();
    }
}
