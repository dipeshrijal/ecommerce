<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Material Design
        </title>

        <link href="css/mdl.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link href="/css/material-modal.css" rel="stylesheet"/>
        <link href="/css/style.css" rel="stylesheet"/>
    </head>
</html>
<body>
    <!-- Uses a header that contracts as the page scrolls down. -->
    <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--waterfall">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">
                    Title
                </span>
                <div class="mdl-layout-spacer">
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp">
                        <i class="material-icons">
                            search
                        </i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" id="waterfall-exp" name="sample" type="text"/>
                    </div>
                </div>
            </div>
            <!-- Bottom row, not visible on scroll -->
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer">
                </div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link--active" href="">
                        Link 1 is very long
                    </a>
                    <a class="mdl-navigation__link" href="">
                        Link
                    </a>
                    <a class="mdl-navigation__link" href="">
                        Link
                    </a>
                    <a class="mdl-navigation__link" href="">
                        Link
                    </a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">
                Title
            </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">
                    Link 1
                </a>
                <a class="mdl-navigation__link" href="">
                    Link
                </a>
                <a class="mdl-navigation__link" href="">
                    Link
                </a>
                <a class="mdl-navigation__link" href="">
                    Link
                </a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--2-col">
                    </div>
                    <div class="mdl-cell mdl-cell--8-col">
                        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">
                                        Material
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                    <th>
                                        Unit price
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        Acrylic (Transparent)
                                    </td>
                                    <td>
                                        25
                                    </td>
                                    <td>
                                        $2.90
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                edit
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                delete
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        Plywood (Birch)
                                    </td>
                                    <td>
                                        50
                                    </td>
                                    <td>
                                        $1.25
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                edit
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                delete
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        Laminate (Gold on Blue)
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        $2.35
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                edit
                                            </i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                delete
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- List items with avatar and action -->
                        <div class="demo-list-action mdl-list">
                            <div class="mdl-list__item">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">
                                        person
                                    </i>
                                    <span>
                                        Bryan Cranston
                                    </span>
                                </span>
                                <a class="mdl-list__item-secondary-action" href="#">
                                    <i class="material-icons">
                                        star
                                    </i>
                                </a>
                            </div>
                            <div class="mdl-list__item">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">
                                        person
                                    </i>
                                    <span>
                                        Aaron Paul
                                    </span>
                                </span>
                                <a class="mdl-list__item-secondary-action" href="#">
                                    <i class="material-icons">
                                        star
                                    </i>
                                </a>
                            </div>
                            <div class="mdl-list__item">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">
                                        person
                                    </i>
                                    <span>
                                        Bob Odenkirk
                                    </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#">
                                        <i class="material-icons">
                                            star
                                        </i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col">
                    </div>
                </div>
            </div>
        </main>

        <!-- Colored FAB button -->
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored modal__trigger fab" data-modal="#modal">
          <i class="material-icons">add</i>
        </button>

        {{-- <a href="" class="fab mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored modal__trigger" data-modal="#modal">
          Launch Modal
        </a> --}}
        <div id="modal" class="modal modal__bg">
          <div class="modal__dialog">
            <div class="modal__content">
              <div class="modal__header">
                <div class="modal__title">
                  <h2 class="modal__title-text">Modal</h2>
                </div>

                <span class="mdl-button mdl-button--icon mdl-js-button material-icons modal__close"></span>
              </div>


              <div class="modal__text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis laboriosam accusantium facere suscipit, alias accusamus corrupti consequatur at porro, voluptates commodi sed omnis voluptatem, ex officiis illum, architecto fugiat id?
                </p>
              </div>

              <div class="modal__footer">
                <a class="mdl-button mdl-button--colored mdl-js-button  modal__close">
                  Close
                </a>
              </div>
            </div>
          </div>
        </div>

    </div>
    <script defer="" src="https://code.getmdl.io/1.2.0/material.min.js">
    </script>
    <script src="/js/material-modal.min.js">
    </script>
</body>
