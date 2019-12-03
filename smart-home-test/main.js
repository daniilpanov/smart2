let f = (url, method = 'get', body = null, token = 'ZxTHYhfsZf3epk5TbGKeFaiLx54XfZiz') => {

    let host = 'http://localhost/smart-home/api';

    if (method === 'get') {
        return fetch(`${host}/${url}`, {
            headers: {
                'Authorization': `Bearer ${token}`
            },
        });
    }

    return fetch(`${host}/${url}`, {
        method,
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify(body)
    });

};

let token = null;

let login = () => {
    return f('login', 'post', {
        login: 'larin',
        password: 'pass'
    });
};

let getRooms = () => {
    return f('rooms', 'get', null, token);
};

let getRoom = (id) => {
    return f(`rooms/${id}`, 'get', null, token);
};
let getDevices = (id) => {
    return f(`rooms/${id}/devices`, 'get', null, token);
};
let getDevice = (id) => {
    return f(`devices/${id}`, 'get', null, token);
};
let updateDevice = (id, value) => {
    return f(`devices/${id}`, 'patch', {
        value
    }, token);
};
let getMacroses = (id) => {
    return f(`macros`, 'get', null, token);
};
let createMacros = (name, devices) => {
    return f(`macros`, 'post', {
        name,
        devices: devices
    }, token);
};
let deleteMacros = (id) => {
    return f(`macros/${id}`, 'delete', null, token);
};
let useMacros = (id) => {
    return f(`macros/${id}`, 'get', null, token);
};

let room, device, macros;

login()
    .then(res => res.json())
    .then(res => {
        token = res.token;

        console.log('login, token: ', res);

        return getRooms();
    })
    .then(res => res.json())
    .then(res => {
        console.log('Rooms', res);

        room = res[0].id;

        return getRoom(room)
    })
    .then(res => res.json())
    .then(res => {
        console.log('Room', res);

        return getDevices(room);
    })
    .then(res => res.json())
    .then(res => {
        console.log('Devices', res);

        device = res[0].id;

        return getDevice(device)
    })
    .then(res => res.json())
    .then(res => {
        console.log('Device', res);

        return updateDevice(res.id, 'open');
    })
    .then(res => res.json())
    .then(res => {
        console.log('Device updated', res);

        return createMacros('My macros for test', [{
                id: device,
                value: 'close'
            }]
        )
    })
    .then(res => res.json())
    .then(res => {
        console.log('Macros created ', res);

        macros = res.id;

        return getMacroses();
    })
    .then(res => res.json())
    .then(res => {
        console.log('List mascroses ', res);

        return getDevice(device)
    })
    .then(res => res.json())
    .then(res => {
        console.log('Get device', res);

        return useMacros(macros);
    })
    .then(res => res.json())
    .then(res => {
        console.log('Macros used', res);

        return getDevice(device)
    })
    .then(res => res.json())
    .then(res => {
        console.log('Get device', res);

        return deleteMacros(macros);
    })
    .then(res => res.json())
    .then(res => {
        console.log('Macros deleted', res);

        return getMacroses();
    })
    .then(res => res.json())
    .then(res => {
        console.log('List mascroses ', res);
    });

