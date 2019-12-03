let vue = new Vue({
    el: '#app',
    data: {
        flats: [
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            },
            {
                hall: {
                    light1: false,
                    light2: false,
                    window1: false,
                    window2: false
                },
                bedroom: {
                    light: false,
                    bra: false,
                    window: false
                },
                exit: {
                    door: false,
                    light: false
                },
                kitchen: {
                    light: false,
                    window: false
                }
            }
        ]
    },
    methods: {
        getRooms(start, end) {
            return this.flats.filter((el, i) => {
                return i >= start && i <= end;
            });
        }
    }
});

function update() {
    let t = vue.flats;

    fetch('http://wsr.ru/smart-home/api/info')
        .then(res => res.json())
        .then(res => {
            vue.flats = res;
        });
}

setInterval(() => {
    update();
}, 1000);


setInterval(() => {
    fetch('http://wsr.ru/smart-home/api/change')
}, 60000);