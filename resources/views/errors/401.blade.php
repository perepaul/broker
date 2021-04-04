@extends('layouts.master')

@section('content-background')

<div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb"></ul>
            </div>
        </div>
    </div>
</div>

@endsection


@section('content-trading')

<div class="uk-section uk-section-muted uk-padding-large in-liquid-8">
    <div class="uk-container">

        <div class="uk-grid uk-flex uk-flex-center in-offset-bottom-20">
            <div class="uk-width-5-6@m uk-text-center">
                <h2 class="uk-margin-remove">Error 401</h2>
                <p class="uk-text-lead uk-text-muted uk-margin-small-top">UNAUTHORIZED ACCESS</p>
                {{-- <div class="uk-grid-medium uk-child-width-1-3@m" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OSIgdmlld0JveD0iMCAwIDQ4IDQ5Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIuMzI1JSIgeDI9Ijk5LjY3NSUiIHkxPSIxMDAlIiB5Mj0iMCUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJwogICAgICAgIGQ9Ik0xNTggNjQuMjFjMy4zMTQgMCA2IDIuNjk0IDYgNi4wMTl2MzYuMTE3YzAgMy4zMjUtMi42ODYgNi4wMi02IDYuMDJoLTM2Yy0zLjMxNCAwLTYtMi42OTUtNi02LjAyVjcwLjIzYzAtMy4zMjUgMi42ODYtNi4wMiA2LTYuMDJoMzZ6bTAgMy4wMDloLTM2Yy0xLjU4MiAwLTIuODc3IDEuMjI4LTIuOTkyIDIuNzg1bC0uMDA4LjIyNXYzNi4xMTdjMCAxLjU4NyAxLjIyNCAyLjg4NyAyLjc3NiAzLjAwMmwuMjI0LjAwOGgzNmMxLjU4MiAwIDIuODc3LTEuMjI4IDIuOTkyLTIuNzg1bC4wMDgtLjIyNVY3MC4yM2MwLTEuNTg3LTEuMjI0LTIuODg3LTIuNzc2LTMuMDAyTDE1OCA2Ny4yMnptLTkgMjIuNTczYzQuMTQyIDAgNy41IDMuMzcgNy41IDcuNTI1IDAgNC4xNTYtMy4zNTggNy41MjUtNy41IDcuNTI1LTQuMTQyIDAtNy41LTMuMzctNy41LTcuNTI1IDAtNC4xNTYgMy4zNTgtNy41MjUgNy41LTcuNTI1em0wIDMuMDFjLTIuNDg1IDAtNC41IDIuMDIyLTQuNSA0LjUxNXMyLjAxNSA0LjUxNSA0LjUgNC41MTUgNC41LTIuMDIyIDQuNS00LjUxNS0yLjAxNS00LjUxNS00LjUtNC41MTV6bTIuNzA1LTE2LjIyYy41ODYuNTg2LjU4NSAxLjUzNy0uMDAzIDIuMTI1TDEzMC40MTkgOTkuOTljLS41ODcuNTg3LTEuNTM5LjU4OS0yLjEyNC4wMDMtLjU4Ni0uNTg2LS41ODUtMS41MzcuMDAzLTIuMTI1bDIxLjI4My0yMS4yODJjLjU4Ny0uNTg4IDEuNTM5LS41OSAyLjEyNC0uMDA0ek0xMzEgNzEuNzM0YzQuMTQyIDAgNy41IDMuMzY4IDcuNSA3LjUyNCAwIDQuMTU2LTMuMzU4IDcuNTI1LTcuNSA3LjUyNS00LjE0MiAwLTcuNS0zLjM3LTcuNS03LjUyNSAwLTQuMTU2IDMuMzU4LTcuNTI0IDcuNS03LjUyNHptMCAzLjAxYy0yLjQ4NSAwLTQuNSAyLjAyLTQuNSA0LjUxNHMyLjAxNSA0LjUxNSA0LjUgNC41MTUgNC41LTIuMDIxIDQuNS00LjUxNWMwLTIuNDkzLTIuMDE1LTQuNTE1LTQuNS00LjUxNXoiCiAgICAgICAgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExNiAtNjQpIiAvPgo8L3N2Zz4=" alt="">
                            <h6><strong>Margin Trading</strong></h6>
                            <p>Trade with leverage and low spreads for better returns on successful trades.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OSIgdmlld0JveD0iMCAwIDQ4IDQ5Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIuMzI1JSIgeDI9Ijk5LjY3NSUiIHkxPSIxMDAlIiB5Mj0iMCUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJwogICAgICAgIGQ9Ik0xNTggNjQuMjFjMy4zMTQgMCA2IDIuNjk0IDYgNi4wMTl2MzYuMTE3YzAgMy4zMjUtMi42ODYgNi4wMi02IDYuMDJoLTM2Yy0zLjMxNCAwLTYtMi42OTUtNi02LjAyVjcwLjIzYzAtMy4zMjUgMi42ODYtNi4wMiA2LTYuMDJoMzZ6bTAgMy4wMDloLTM2Yy0xLjU4MiAwLTIuODc3IDEuMjI4LTIuOTkyIDIuNzg1bC0uMDA4LjIyNXYzNi4xMTdjMCAxLjU4NyAxLjIyNCAyLjg4NyAyLjc3NiAzLjAwMmwuMjI0LjAwOGgzNmMxLjU4MiAwIDIuODc3LTEuMjI4IDIuOTkyLTIuNzg1bC4wMDgtLjIyNVY3MC4yM2MwLTEuNTg3LTEuMjI0LTIuODg3LTIuNzc2LTMuMDAyTDE1OCA2Ny4yMnptLTI1LjUgMzYuMTE4bC0uMDQ1LS4wMDEtLjA5LS4wMDYuMTM1LjAwN2MtLjA3IDAtLjEzNy0uMDA1LS4yMDQtLjAxNWwtLjA2Ny0uMDFjLS4wNzMtLjAxNC0uMTQ0LS4wMzQtLjIxMy0uMDU4LS4xMzMtLjA0Ny0uMjYxLS4xMTQtLjM4LS4ybC0uMDQyLS4wMzItLjAxMy0uMDEtLjAzMi0uMDI3Yy0uMDMtLjAyNS0uMDU5LS4wNTItLjA4Ny0uMDhsLS4wMjMtLjAyMy02LTYuMjAyYy0uNTg1LS42MDUtLjU4NS0xLjU4NyAwLTIuMTkyLjU0MS0uNTYgMS4zOTItLjYwMiAxLjk4LS4xM2wuMTQyLjEzTDEzMSA5OC4wNDJ2LTEwLjIxYzAtLjg1Ny42NzItMS41NTEgMS41LTEuNTUxLjc3IDAgMS40MDMuNTk5IDEuNDkgMS4zN2wuMDEuMTh2MTAuMjExbDMuNDQtMy41NTRjLjU0LS41NiAxLjM5LS42MDIgMS45OC0uMTNsLjE0LjEzYy41NDEuNTU5LjU4MyAxLjQzOC4xMjUgMi4wNDZsLS4xMjQuMTQ2LTYgNi4yMDJjLS4wMzIuMDMzLS4wNjYuMDY1LS4xLjA5NWwuMS0uMDk1Yy0uMDUuMDUtLjEuMDk3LS4xNTQuMTRsLS4wNTguMDQyLS4wNTMuMDM3LS4wNzIuMDQ0LS4wMzguMDJjLS4wMy4wMTYtLjA2LjAzMS0uMDkxLjA0NWwtLjA0Mi4wMThjLS4wMjcuMDExLS4wNTUuMDIxLS4wODMuMDNsLS4wNDcuMDE2Yy0uMDI5LjAwOS0uMDU4LjAxNy0uMDg4LjAyNGwtLjA0OC4wMWMtLjAzNS4wMDctLjA3MS4wMTMtLjEwNy4wMThsLS4wMjUuMDAyYy0uMDMyLjAwNC0uMDY1LjAwNi0uMDk4LjAwOGgtLjA1N3ptMTUtMzEuMTAybC0uMDQ1LjAwMWMtLjAzIDAtLjA2LjAwMy0uMDkuMDA2bC4xMzUtLjAwN2MtLjA3IDAtLjEzNy4wMDUtLjIwNC4wMTVsLS4wNjcuMDFjLS4wNzMuMDE0LS4xNDQuMDMzLS4yMTMuMDU4LS4xMzMuMDQ3LS4yNjEuMTEzLS4zOC4ybC0uMDQyLjAzMi0uMDEzLjAxLS4wMzIuMDI2Yy0uMDMuMDI2LS4wNTkuMDUyLS4wODcuMDhsLS4wMjMuMDIzLTYgNi4yMDJjLS41ODUuNjA2LS41ODUgMS41ODggMCAyLjE5My41NDEuNTYgMS4zOTIuNjAyIDEuOTguMTNsLjE0Mi0uMTNMMTQ2IDc3LjUzdjEwLjIxYzAgLjg1Ny42NzIgMS41NSAxLjUgMS41NS43NyAwIDEuNDAzLS41OTggMS40OS0xLjM2OWwuMDEtLjE4Vjc3LjUzbDMuNDQgMy41NTRjLjU0LjU2IDEuMzkuNjAyIDEuOTguMTNsLjE0LS4xM2MuNTQxLS41NTkuNTgzLTEuNDM4LjEyNS0yLjA0NmwtLjEyNC0uMTQ3LTYtNi4yMDJjLS4wMzItLjAzMy0uMDY2LS4wNjQtLjEtLjA5NGwuMS4wOTRjLS4wNS0uMDUtLjEtLjA5Ni0uMTU0LS4xMzgtLjAxOS0uMDE1LS4wMzgtLjAzLS4wNTgtLjA0M2wtLjA1My0uMDM3LS4wNzItLjA0NC0uMDM4LS4wMmMtLjAzLS4wMTYtLjA2LS4wMzEtLjA5MS0uMDQ1bC0uMDQyLS4wMThjLS4wMjctLjAxMS0uMDU1LS4wMjItLjA4My0uMDMxbC0uMDQ3LS4wMTVjLS4wMjktLjAwOS0uMDU4LS4wMTctLjA4OC0uMDI0bC0uMDQ4LS4wMWMtLjAzNS0uMDA3LS4wNzEtLjAxMy0uMTA3LS4wMThsLS4wMjUtLjAwMmMtLjAzMi0uMDA0LS4wNjUtLjAwNi0uMDk4LS4wMDhoLS4wNTd6IgogICAgICAgIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMTYgLTY0KSIgLz4KPC9zdmc+" alt="" srcset="">
                            <h6></i><strong>Options</strong></h6>
                            <p>Earn fixed payouts by predicting an asset's price movement within a fixed time.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIgdmlld0JveD0iMCAwIDQ4IDQ4Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSIxMDAlIiB5Mj0iMCUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJwogICAgICAgIGQ9Ik0xNTkgNjRjMy4zMTQgMCA2IDIuNjg2IDYgNnYzNmMwIDMuMzE0LTIuNjg2IDYtNiA2aC0zNmMtMy4zMTQgMC02LTIuNjg2LTYtNlY3MGMwLTMuMzE0IDIuNjg2LTYgNi02aDM2em0wIDNoLTM2Yy0xLjU4MiAwLTIuODc3IDEuMjI0LTIuOTkyIDIuNzc2TDEyMCA3MHYzNmMwIDEuNTgyIDEuMjI0IDIuODc3IDIuNzc2IDIuOTkyTDEyMyAxMDloMzZjMS41ODIgMCAyLjg3Ny0xLjIyNCAyLjk5Mi0yLjc3NkwxNjIgMTA2VjcwYzAtMS41ODItMS4yMjQtMi44NzctMi43NzYtMi45OTJMMTU5IDY3em0tMjkuNjEgOS4zOWMuNTIxLS41MiAxLjM2NS0uNTIgMS44ODYgMEwxNDEgODYuMTE1bDkuNzI0LTkuNzIzYy41Mi0uNTIxIDEuMzY1LS41MjEgMS44ODUgMCAuNDgxLjQ4LjUxOCAxLjIzNi4xMTEgMS43NmwtLjExLjEyNUwxNDIuODg1IDg4bDkuNzIzIDkuNzI0LjExMS4xMjVjLjQwNy41MjQuMzcgMS4yOC0uMTEgMS43Ni0uNTIxLjUyMS0xLjM2NS41MjEtMS44ODYgMEwxNDEgODkuODg2bC05LjcyNCA5LjcyM2MtLjUyLjUyMS0xLjM2NS41MjEtMS44ODUgMC0uNDgxLS40OC0uNTE4LTEuMjM2LS4xMTEtMS43NmwuMTEtLjEyNUwxMzkuMTE1IDg4bC05LjcyMy05LjcyNC0uMTExLS4xMjVjLS40MDctLjUyNC0uMzctMS4yOC4xMS0xLjc2eiIKICAgICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTE3IC02NCkiIC8+Cjwvc3ZnPg==" alt="">
                            <h6><strong>Multipliers</strong></h6>
                            <p>Get the best of both - the upside of margin trading with the simplicity of options.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>


@endsection
